<?php

namespace App\Http\Controllers;

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use App\Models\WorkGroup;
use App\Models\WorkQuestion;
use App\Models\Form;
use PhpParser\Node\Expr\Print_;

use function Laravel\Prompts\alert;

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


    public function testfile()
    {

        return view('workgroup.test');
    }

    public function store(Request $request)

    {

        $WorkQuestion = new WorkQuestion();
        $WorkQuestion->questions_from_data = $request->form_data;
        $WorkQuestion->form_name = $request->form_name;

        $WorkQuestion->save();
        return response()->json(['success' => true]);
    }

   public function duplicate($id)
{
    $original = WorkQuestion::findOrFail($id);

    // Create a new name with 'Copy'
    $newName = $original->form_name . ' Copy';

    // Check if a question with this new name already exists
    $alreadyExists = WorkQuestion::where('form_name', $newName)->exists();

    if ($alreadyExists) {
        return redirect('/work-group/showgroupquestion')->with('error', 'A duplicate with this name already exists!');
    }

    // Proceed to duplicate
    $duplicate = new WorkQuestion();
    $duplicate->questions_from_data = $original->questions_from_data;
    $duplicate->form_name = $newName;
    $duplicate->save();

    return redirect('/work-group/showgroupquestion')->with('success', 'Group question duplicated successfully!');
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

    // public function workgroupquestionedit($id)
    // {
    //     $workgroupquestion = WorkQuestion::findOrFail($id);
    //     $groups = WorkGroup::all();

    //     return view('workgroup.edit_group_question', compact('workgroupquestion', 'groups'));
    // }

    public function workgroupquestionedit($id)
    {
        $question = WorkQuestion::findOrFail($id);

        return view('workgroup.edit_group_question', [
            'questionJson' => $question->questions_from_data,
            'questionId' => $id,
            'form_name' => $question->form_name,
        ]);
    }


    public function workgroupquestionupdate(Request $request, $id)
    {

        $question = WorkQuestion::findOrFail($id);

        $formData = $request->input('form_data');

        $form_name = $request->input('form_name');

        $question->questions_from_data = $formData;

        $question->form_name = $form_name;

        $question->save();

        return response()->json(['message' => 'Workgroup question updated successfully!']);
    }
}
