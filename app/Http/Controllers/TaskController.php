<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Task;

class TaskController extends Controller
{
    public function getIndex()
    {
    	$tasks = Task::all();
    	return view('welcome', ['tasks' => $tasks]);
    }

    public function getID($task_id)
    {
    	$task = Task::find($task_id);
    	return Response::json($task);
    }

    public function postTaskCreate(Request $request)
    {
    	$task = new Task();
    	$task->task = $request->task;
    	$task->description = $request->description;
    	$task->done = $request->done;
    	$task->save();

    	return Response::json($task);
    }

    public function putTaskUpdate(Request $request, $task_id)
    {
	    $task = Task::find($task_id);
	    $task->task = $request->task;
	    $task->description = $request->description;
	    $task->done = $request->done;
	    $task->save();

	    return Response::json($task);
    }

    public function deleteTaskDelete($task_id)
    {
    	$task = Task::destroy($task_id);
    	return Response::json($task);
    }

}
