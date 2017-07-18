<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Auth;

class TaskController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    function createNewTask(Request $request) {
    	$new_task = new Task();
    	$new_task->name = $request->name;
    	$new_task->description = $request->description;
    	$new_task->save();

    	$request->session()->Flash('message', 'Task added successfully!');

    	return back();
    }

    function showTask() {
    	$tasks = Task::all();
    	return view('/create', compact('tasks'));
    }

    function deleteTask($id) {
    	$task_tbd = Task::find($id);
    	$task_tbd->delete();

    	return back();
    }


}
