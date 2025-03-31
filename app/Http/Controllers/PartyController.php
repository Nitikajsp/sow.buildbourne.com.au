<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parties;
use App\Models\WorkGroup;
use App\Models\Submission;



class PartyController extends Controller

{
    /**
     * Display a listing of the resource.
     */

    public function index()

    {
        $parties = Parties::orderBy('created_at', 'desc')->get();
        return view('parties.parties_list', compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()

    {
        return view('parties.add_parties');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:parties,email',
            'phone' => 'required',
            'street' => 'required',
            'suburb' => 'required',
            'state' => 'required',
            'pincode' => 'required',


        ], [
            'phone.regex' => 'The phone number must be in international format, e.g., +1234567890.',
            'email.unique' => 'The email address has already been taken.',
        ]);

        Parties::create($request->only(['name', 'email', 'phone', 'street', 'house_number', 'suburb', 'state', 'pincode', 'party_type']));
        return redirect()->route('parties.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     */

    public function show(Parties $party)
    {

        $lists = $party->lists()->orderBy('created_at', 'desc')->get();

        return view('parties.show_parties', compact('party', 'lists'));
    }



    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Parties $party)

    {
        return view('parties.edit_parties', compact('party'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Parties $party)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:parties,email,' . $party->id,
            'phone' => 'required',
            'street' => 'required',
            'suburb' => 'required',
            'state' => 'required',
            'pincode' => 'required',
        ], [
            'phone.regex' => 'The phone number must be in international format, e.g., +1234567890.',
            'email.unique' => 'The email address has already been taken.',
        ]);

        $party->update($request->only(['name', 'email', 'phone', 'street', 'house_number', 'suburb', 'state', 'pincode', 'party_type']));

        return redirect()->route('parties.edit', ['party' => $party->id])->with('success', 'Party updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Parties $party)

    {

        $party->delete();

        return redirect()->route('parties.index')->with('success', 'Parties deleted successfully.');
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
        $exists = Parties::where('email', $email)->exists();

        return response()->json(['available' => !$exists]);
    }

    public function updateWorkType(Request $request, $listId, $partyId)
    {
        $request->validate([
            'work_type' => 'required|in:advance,normal',
        ]);

        $party = Parties::findOrFail($partyId);
        $party->choose_your_work_type = $request->work_type;
        $party->save();

        return redirect()->route('parties.siteWork', ['party' => $partyId, 'list' => $listId]);
    }


    public function showSiteWork($partyId, $listId)
    {
        $party = Parties::findOrFail($partyId);
        $groups = WorkGroup::with('questions')->get();

        return view('workgroup.site-work', compact('party', 'groups', 'listId'));
    }

    public function saveSiteWork(Request $request, $partyId, $listId)
    {
        $formData = $request->except('_token');

        $workDataJson = json_encode($formData);

        // Store data in the database
        Submission::create([
            'project_id' => $listId,
            'party_id' => $partyId,
            'work' => $workDataJson,
            'status' => 'pending'
        ]);

        // Redirect to the submissions list page instead of party show page
        return redirect()->route('submissions.index')->with('success', 'Site work saved successfully.');
    }

    public function showAllSubmissions()
    {
        $submissions = Submission::with(['project', 'party'])->orderBy('created_at', 'desc')->get();
        return view('question.show_submissions_data', compact('submissions'));
    }

    public function showsubmissions($id)
    {
        $submission = Submission::with(['party', 'workGroup'])->findOrFail($id);

        return view('question.view_submissions', compact('submission'));
    }
}
