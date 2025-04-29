<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use App\Models\Parties;
use App\Models\WorkGroup;
use App\Models\Submission;
use App\Models\WorkQuestion;

use Illuminate\Support\Facades\Mail;

class PartyController extends Controller

{

    public function index()

    {
        $parties = Parties::where('delete_status', 0)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('parties.parties_list', compact('parties'));
    }

    public function create()

    {
        return view('parties.add_parties');
    }

    public function addtestform()
    {

        return view('workgroup.add_test_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'street' => 'required',
        ]);

        if ($request->filled('email')) {
            $exists = Parties::where('email', $request->email)
                ->where('delete_status', 0)
                ->exists();

            if ($exists) {
                return back()->withErrors(['email' => 'This email already exists.'])->withInput();
            }
        }

        Parties::create($request->only([
            'name',
            'email',
            'phone',
            'street',
            'house_number',
            'state',
            'pincode',
            'party_type'
        ]));

        return redirect()->route('parties.index')->with('success', 'Client created successfully.');
    }


    public function show(Parties $party)
    {
        $lists = $party->lists()
            ->where('delete_status', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('parties.show_parties', compact('party', 'lists'));
    }

    public function edit(Parties $party)

    {
        return view('parties.edit_parties', compact('party'));
    }


    public function update(Request $request, Parties $party)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street' => 'required',

        ], [
            'phone.regex' => 'The phone number must be in international format, e.g., +1234567890.',
        ]);

        $party->update($request->only(['name', 'email', 'phone', 'street', 'house_number', 'party_type']));

        return redirect()->route('parties.edit', ['party' => $party->id])->with('success', 'Client updated successfully.');
    }

    public function destroy($id)

    {


        $party = Parties::findOrFail($id);
        $party->delete_status = 1;
        $party->save();

        return redirect()->route('parties.index')->with('success', 'client  deleted successfully.');
    }

    public function updateStatus(Request $request, $id)

    {
        $party = Parties::findOrFail($id);

        $party->status = $request->input('status');

        $party->save();

        $request->session()->put('status_email', $party->email);

        $parties = Parties::all();

        return response()->json(['success' => 'Status updated successfully']);
    }


    public function showlistcoustomer($id)

    {
        $party = Parties::findOrFail($id);

        return view('list.show_list', compact('party'));
    }
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        $exists = Parties::where('email', $email)
            ->where('delete_status', 0)
            ->exists();

        return response()->json(['available' => !$exists]);
    }


    public function updateWorkType(Request $request, $listId, $partyId)
    {
        $request->validate([
            'work_id' => 'required',
        ]);

        // ID pramane record lavso
        $questions = WorkQuestion::findOrFail($request->work_id);

        return view('workgroup.site-work', [
            'partyId' => $partyId,
            'listId' => $listId,
            'questionJson' => $questions->questions_from_data,
            'workType' => $questions->form_name,
            'work_id' => $request->work_id,
        ]);
    }




    public function showSiteWork($partyId, $listId)
    {
        $party = Parties::findOrFail($partyId);

        return view('workgroup.site-work', compact('party', 'listId'));
    }


    public function saveSiteWork(Request $request)
    {
        $request->validate([
            'form_data' => 'required',
            'partyId' => 'required',
            'listId' => 'required',
            'work_id' => 'required'
        ]);

        $form_data = $request->input('form_data');

        $workGroup = new Submission();
        $workGroup->project_id = $request->input('listId');
        $workGroup->party_id = $request->input('partyId');
        $workGroup->work_id = $request->input('work_id');
        $workGroup->work = json_encode($form_data);

        $workGroup->save();

        $party = Parties::find($request->partyId);

        if ($party && $party->email) {
            $workData = $form_data;

            $pdf = Pdf::loadView('emails.site_work_submitted', [
                'party' => $party,
                'workData' => $workData
            ]);


            Mail::send([], [], function ($message) use ($party, $pdf) {
                $message->to($party->email)
                    ->subject('Site Work Updated')
                    ->attachData($pdf->output(), 'SiteWork_Updated.pdf');
            });
        }

        return response()->json([
            'redirect_url' => route('submissions.index'),
            'message' => 'Successfully saved!',
        ]);
    }

    public function showAllSubmissions()
    {
        $submissions = Submission::with(['project', 'party'])
            ->whereHas('project', function ($query) {
                $query->where('delete_status', 0);
            })
            ->whereHas('party', function ($query) {
                $query->where('delete_status', 0);
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('question.show_submissions_data', compact('submissions'));
    }


    public function editsubmissions($id)
    {
        $data = Submission::find($id);
        $workData = json_decode($data->work, true);

        return view('question.edit_submission', [
            'workData' => $workData,
            'submissionId' => $id
        ]);
    }

    public function showsubmissions($id)

    {
        $data = Submission::find($id);
        $workData = json_decode($data->work, true);

        return view('question.view_submissions', [
            'workData' => $workData,
            'submissionId' => $id
        ]);
    }

    public function updateSiteWork(Request $request)
    {
        $input = $request->all();

        $siteWorkData = [];

        foreach ($input as $key => $value) {
            if (is_array($value)) {
                $siteWorkData[$key] = $value;
            }
        }

        $sowData = [
            'site_work' => $siteWorkData
        ];

        $model = Submission::find($request->input('id'));
        $existingData = json_decode($model->work, true) ?? [];

        $existingData['sow'] = $sowData;

        $model->work_ = json_encode($existingData);
        $model->save();

        return back()->with('success', 'Site work updated successfully!');
    }

    public function updateSubmission(Request $request)
    {
        $id = $request->input('submissionId');
        $form_data = $request->input('form_data');

        $submission = Submission::find($id);

        if (!$submission) {
            if ($request->ajax()) {
                return response()->json(['success' => false, 'message' => 'Submission not found.']);
            }
            return redirect()->back()->with('error', 'Submission not found.');
        }

        $submission->work = json_encode($form_data);
        $submission->save();

        // if ($request->input('action') === 'save_send') {
        //     $party = Parties::findOrFail($submission->party_id);

        //     $pdf = Pdf::loadView('emails.site_work_submitted', [
        //         'party' => $party,
        //         'workData' => $workData
        //     ]);

        //     Mail::send([], [], function ($message) use ($party, $pdf) {
        //         $message->to($party->email)
        //             ->subject('Site Work Updated')
        //             ->attachData($pdf->output(), 'SiteWork_Updated.pdf');
        //     });

        //     return redirect()->route('submissions.index', $id)->with('success', 'Submission updated successfully and email sent.');
        // }

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Submission updated successfully!']);
        }

        return redirect()->route('submissions.index', $id)->with('success', 'Submission updated successfully!');
    }
}
