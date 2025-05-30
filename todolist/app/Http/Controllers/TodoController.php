<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function AddView(){
        return view('Add');
    }
    public function ShowTasksView(){
        return view('Tasks');
    }
    public function StoreTask(Request $request){
        $data= $request->post();
        dd( $data);
    }
}
