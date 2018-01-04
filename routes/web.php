<?php
//prevent Call to undefined method Illuminate\Support\Facades\Request::all()
use Illuminate\Http\Request;
use App\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//index


Route::get('/', [
	'uses' => 'TaskController@getIndex',
	'as' => 'tasks'
]);

//get id
Route::get('/tasks/{task_id?}',function($task_id){
    $task = Task::find($task_id);
    return Response::json($task);
});
// post
Route::post('/tasks',function(Request $request){
    $task = Task::create($request->all());
    return Response::json($task);
});
//store
Route::put('/tasks/{task_id?}',function(Request $request,$task_id){
	// dd($request);
    $task = Task::find($task_id);
    $task->task = $request->task;
    $task->description = $request->description;
    $task->done = $request->done;
    $task->save();
    return Response::json($task);
});
//delete
Route::delete('/tasks/{task_id?}',function($task_id){
    $task = Task::destroy($task_id);
    return Response::json($task);
});