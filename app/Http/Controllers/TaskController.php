<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function getIndex()
    {
    	$tasks = Task::all();
    	return view('welcome', ['tasks' => $tasks]);
    }
}
