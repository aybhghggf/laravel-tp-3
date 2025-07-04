<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Http\Requests\TaskFormRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function AddView()
    {
        return view('Add');
    }
    public function ShowTasksView()
    {
        $tasks = Tasks::all();
        return view('Tasks', compact('tasks'));
    }
    public function StoreTask(Request $request, TaskFormRequest $reqvalidation)
    {
        $data = $request->post();
        $validation = $reqvalidation->validated();
        if ($validation) {
            $datainsert = [
                'title' => $data['title'],
                'description' => $data['description'],
                'Date_Max' => $data['due_date'],
            ];
            Tasks::create($datainsert);
            return to_route('Showtasks')->with('success', 'Task Added Successfully');
        }
    }
    public function ShowUpdatePage($id)
    {
        $task = Tasks::find($id);
        return view('Update', compact('task'));
    }
    public function StoreUpdate(Request $reqq, $id)
    {
        $stmt = $reqq->post();
        $data = [
            'title' => $stmt['title'],
            'description' => $stmt['description'],
            'Date_Max' => $stmt['end_date'],
        ];
        Tasks::where('id', $id)->update($data);
        return to_route('Showtasks')->with('success', 'Task Updated Successfully');
    }
    public function DeleteTask($id)
    {
        Tasks::where('id', $id)->delete();
        return to_route('Showtasks')->with('success', 'Task Deleted Successfully');
    }
}
