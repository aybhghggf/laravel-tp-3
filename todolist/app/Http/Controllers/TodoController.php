<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function AddView(){
        return view('Add');
    }
    public function ShowTasksView(){
        return view('Tasks');
    }
    public function StoreTask(Request $request , TaskFormRequest $reqvalidation){
        $data= $request->post();
        $validation = $reqvalidation->validated();
        if($validation){
            dd( $validation);
        }
        //validation

    }
}
