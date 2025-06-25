<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

// use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Mpdf\Mpdf;

use Illuminate\Support\Facades\View;

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



public function sendSiteWorkEmail()
{
    $partyName = "John Doe";
    $partyEmail = "john@example.com";
    $jobId = 1001;
    $locatedAt = "123 Freedom St, NSW";
    $currentDate = now()->format('d-m-Y');
    $clientName = $partyName;

    $workData = [
        [
            "type" => "header",
            "label" => "Site Preparation"
        ],
        [
            "type" => "paragraph",
            "label" => "Site clearing includes removal of trees and leveling."
        ],
        [
            "type" => "checkbox-group",
            "label" => "Tasks Completed",
            "name" => "tasks",
            "userData" => ["task1", "task2"],
            "values" => [
                ["label" => "Tree Removal", "value" => "task1"],
                ["label" => "Leveling", "value" => "task2"]
            ]
        ]
    ];

    $html = View::make('emails.site_work_submitted', compact(
        'clientName', 'jobId', 'locatedAt', 'currentDate', 'workData'
    ))->render();

    $mpdf = new Mpdf([
        'margin_top' => 55,
        'margin_bottom' => 30,
        'margin_left' => 15,
        'margin_right' => 15,
    ]);

    $mpdf->SetHTMLHeader('
        <table width="100%" style="font-family: sans-serif; font-size: 10pt;">
            <tr>
                <td width="50%"><img src="' . public_path('img/logo.png') . '" height="40"></td>
                <td width="50%" style="text-align: right;">
                    <strong>Client:</strong> ' . $clientName . '<br>
                    <strong>Job No:</strong> ' . $jobId . '<br>
                    <strong>Date:</strong> ' . $currentDate . '
                </td>
            </tr>
        </table><hr>
    ');

    $mpdf->SetHTMLFooter('
        <hr>
        <table width="100%" style="font-size: 9pt; font-family: sans-serif;">
            <tr>
                <td width="33%">Freedom Homes</td>
                <td width="33%" align="center">Page {PAGENO} of {nbpg}</td>
                <td width="33%" align="right">&copy; 2006</td>
            </tr>
        </table>
    ');

    $mpdf->WriteHTML($html);
    $pdfOutput = $mpdf->Output('', 'S');

    Mail::send([], [], function ($message) use ($partyEmail, $pdfOutput) {
        $message->to($partyEmail)
            ->subject('Static Site Work PDF')
            ->attachData($pdfOutput, 'Static_SiteWork.pdf', [
                'mime' => 'application/pdf',
            ]);
    });

    return "Email sent with PDF!";
}


    public function create()

    {
        return view('parties.add_parties');
    }

    public function addtestform()
    {

        return view('workgroup.add_test_form');
    }

   public function viewemail($id)
{
    $data = Submission::find($id);

    if (!$data) {
        abort(404, 'Submission not found.');
    }

    $workData = json_decode($data->work, true);

    return view('workgroup.viewemail', [
        'workData' => $workData,
        'submissionId' => $id
    ]);
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

        return redirect()->route('client.index')->with('success', 'Client created successfully.');
    }


    public function show(Parties $client)
    {

        $lists = $client->lists()
            ->where('delete_status', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('parties.show_parties', compact('client', 'lists'));
    }

    public function edit(Parties $client)

    {
        return view('parties.edit_parties', compact('client'));
    }


    public function update(Request $request, Parties $client)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street' => 'required',

        ], [
            'phone.regex' => 'The phone number must be in international format, e.g., +1234567890.',
        ]);

        $client->update($request->only(['name', 'email', 'phone', 'street', 'house_number', 'party_type']));

        return redirect()->route('client.edit', ['client' => $client->id])->with('success', 'Client updated successfully.');
    }

    public function destroy($id)

    {


        $party = Parties::findOrFail($id);
        $party->delete_status = 1;
        $party->save();

        return redirect()->route('client.index')->with('success', 'client  deleted successfully.');
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
    $work_id = $request->query('work_id');

    if (!$work_id) {
        return redirect()->back()->with('error', 'Please select a work type.');
    }

    $questions = WorkQuestion::findOrFail($work_id);

    $existingDraft = Submission::where('party_id', $partyId)
        ->where('project_id', $listId)
        ->where('work_id', $work_id)
        ->where('status', 'draft')
        ->orderByDesc('updated_at')
        ->first();

   // ✅ Redirect if a draft exists
if ($existingDraft) {
    return redirect()->route('editsubmissions.show', [
        'id' => $existingDraft->id,
        'mode' => 'add' // 👈 force mode to 'add'
    ]);
}


    // No draft found — continue with fresh form
    $questionJson = $questions->questions_from_data;

    return view('workgroup.site-work', [
        'partyId' => $partyId,
        'listId' => $listId,
        'work_id' => $work_id,
        'workData' => [], // empty form
        'questionJson' => $questionJson,
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
        'work_id' => 'required',
        'status' => 'required|in:draft,submitted',
    ]);

    $partyId = $request->input('partyId');
    $listId = $request->input('listId');
    $workId = $request->input('work_id');
    $formData = $request->input('form_data');
    $status = $request->input('status');

    $workGroup = Submission::where('party_id', $partyId)
        ->where('project_id', $listId)
        ->where('work_id', $workId)
        ->first();

    if (!$workGroup) {
        $workGroup = new Submission();
    }

    $workGroup->project_id = $listId;
    $workGroup->party_id = $partyId;
    $workGroup->work_id = $workId;
    $workGroup->work = $formData;
    $workGroup->status = $status;
    $workGroup->save();

    $jobId = $workGroup->id;

    if ($status === 'submitted' && $request->input('send_email')) {
        $party = Parties::find($partyId);

        if ($party && $party->email) {
            $workData = json_decode($formData, true);
            $currentDate = now()->format('d-m-Y');

            $pdf = Pdf::loadView('emails.site_work_submitted', [
                'party' => $party,
                'clientName' => $party->name ?? 'Client',
                'locatedAt' => ($party->street ?? '') . ', ' . ($party->state ?? ''),
                'jobNo' => $jobId,
                'currentDate' => $currentDate,
                'workData' => $workData
            ]);

            Mail::send([], [], function ($message) use ($party, $pdf) {
                $message->to($party->email)
                        ->subject('Site Work Updated')
                        ->attachData($pdf->output(), 'SiteWork_Updated.pdf');
            });
        }
    }

    return response()->json([
        'redirect_url' => $status === 'submitted' ? route('submissions.index') : null,
        'message' => 'Successfully saved!',
        'job_id' => $jobId
    ]);
}




  public function showAllSubmissions()
{
    $submissions = Submission::with(['project', 'party'])
        ->where('status', 'submitted') 
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


public function editsubmissions(Request $request, $id)
{
    $data = Submission::findOrFail($id);
    $workData = json_decode($data->work, true);
    $questionJson = WorkQuestion::findOrFail($data->work_id)->questions_from_data;

    $mode = $request->query('mode', 'edit'); 

    return view('question.edit_submission', [
        'workData' => $workData,
        'submissionId' => $id,
        'questionJson' => $questionJson,
        'mode' => $mode, 
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
    $isManual = $request->input('is_manual_submit');
    $status = $request->input('status', 'draft');

    $submission = Submission::find($id);

    if (!$submission) {
        return $request->ajax()
            ? response()->json(['success' => false, 'message' => 'Submission not found.'])
            : redirect()->back()->with('error', 'Submission not found.');
    }

    $submission->work = $form_data;
    $submission->status = $status; 
    $submission->save(); 

    if ($isManual) {
        try {
            $party = Parties::find($submission->party_id);

            if ($party && $party->email) {
                $workData = json_decode($form_data, true);
                $jobId = $submission->id ?? 'N/A';
                $currentDate = now()->format('d-m-Y');

                $pdf = \PDF::loadView('emails.site_work_submitted', [
                    'party' => $party,
                    'clientName' => $party->name ?? 'Client',
                    'locatedAt' => ($party->street ?? '') . ', ' . ($party->state ?? ''),
                    'jobNo' => $jobId,
                    'currentDate' => $currentDate,
                    'workData' => $workData
                ]);

                \Mail::send([], [], function ($message) use ($party, $pdf) {
                    $message->to($party->email)
                            ->subject('Site Work Updated')
                            ->attachData($pdf->output(), 'SiteWork_Updated.pdf');
                });
            }
        } catch (\Exception $e) {
            \Log::error('Manual submission email error: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Manual submit failed: ' . $e->getMessage()]);
        }
    }

    return $request->ajax()
        ? response()->json(['success' => true, 'message' => 'Submission ' . ($isManual ? 'submitted and email sent!' : 'saved successfully.')])
        : redirect()->route('submissions.index', $id)->with('success', 'Submission updated successfully!');
}


}
