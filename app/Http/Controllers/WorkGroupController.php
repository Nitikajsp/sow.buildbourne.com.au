<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkGroup;
use App\Models\WorkQuestion;

class WorkGroupController extends Controller
{
    public function showworkgroup()
    {
        $workgroups = WorkGroup::all();

        return view('workgroup.show_workgroup',  compact('workgroups'));
    }

    public function addworkgroup()
    {

        return view('workgroup.add_workgroup');
    }

    public function store(Request $request)

    {
        $request->validate([
            'group_name' => 'required|string|max:255',
        ]);

        $workgroup = new WorkGroup();
        $workgroup->group_name = $request->input('group_name');
        $workgroup->save();

        return redirect()->route('workgroup.showworkgroup')->with('success', 'Group added successfully!');
    }

    public function addworkquestion()

    {

        // In Controller
        $workgroups = WorkGroup::all();

        return view('workgroup.add_workgroup_question', compact('workgroups'));
    }


    public function saveworkquestion(Request $request)

    {
        $request->validate([
            'group_id' => 'required|exists:work_groups,id',
            'questions' => 'required|array|min:1',
            'questions.*' => 'required|string'
        ]);

        foreach ($request->questions as $question) {
            WorkQuestion::create([
                'workgroup_id' => $request->group_id,
                'question_title' => $question,
                'question_value' => $question,
                'description' => null
            ]);
        }


        return redirect()->route('workgroup.showgroupquestion')->with('success', 'Group question added successfully!');
    }

    // View Workgroup

    public function workgroupview($id)

    {
        $workgroup = Workgroup::findOrFail($id);
        return view('workgroup.view_group', compact('workgroup'));
    }


    // Delete Workgroup
    public function workgroupdelete($id)
    {
        $workgroup = Workgroup::findOrFail($id);
        $workgroup->delete();

        return redirect()->route('workgroup.showworkgroup')->with('success', 'Group Delet successfully!');
    }

    public function workgroupedit($id)
    {
        $workgroup = Workgroup::findOrFail($id);
        return view('workgroup.edit_group', compact('workgroup'));
    }


    public function workgroupupdate(Request $request, $id)
    {
        $request->validate([
            'group_name' => 'required|string|max:255'
        ]);

        $workgroup = Workgroup::findOrFail($id);
        $workgroup->group_name = $request->group_name;
        $workgroup->save();

        return redirect()->route('workgroup.showworkgroup')->with('success', 'Workgroup updated successfully!');
    }


    public function showgroupquestion()
    {
        $workgroupquestions = WorkQuestion::with('workgroup')->get();

        return view('workgroup.show_group_question', compact('workgroupquestions'));
    }

    public function workquestionview($id)
    {
        $workgroupquestion = WorkQuestion::with('workgroup')->findOrFail($id);

        return view('workgroup.view_group_question', compact('workgroupquestion'));
    }


    public function workquestiondelete($id)

    {

        $workgroup = WorkQuestion::findOrFail($id);
        $workgroup->delete();

        return redirect()->route('workgroup.showgroupquestion')->with('success', 'Group Question Delete Successfully!');
    }

    public function workquestionedit($id)

    {

        $workgroupquestion = WorkQuestion::findOrFail($id);
        return view('workgroup.edit_group', compact('workgroupquestion'));
    }


    public function workgroupquestionedit($id)
    {
        $workgroupquestion = WorkQuestion::findOrFail($id);
        $groups = WorkGroup::all();

        return view('workgroup.edit_group_question', compact('workgroupquestion', 'groups'));
    }


    public function workgroupquestionupdate(Request $request, $id)
    {
        $request->validate([
            'workgroup_id' => 'required|string|max:255',
            'question_title' => 'required|string|max:255',
            'question_value' => 'required|string|max:255'
        ]);

        $workgroup = WorkQuestion::findOrFail($id);
        $workgroup->workgroup_id = $request->workgroup_id;
        $workgroup->question_title = $request->question_title;
        $workgroup->question_value = $request->question_value;

        $workgroup->save();

        return redirect()->route('workgroup.showgroupquestion')->with('success', 'Workgroup question updated successfully!');
    }
}
