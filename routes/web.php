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
Route::get('/tasks/{task_id?}', [
	'uses' => 'TaskController@getId',
	'as' => 'tasks.id'
]);

// post
Route::post('/tasks', [
	'uses' => 'TaskController@postTaskCreate',
	'as' => 'task_create'
]);

//store
Route::put('/tasks/{task_id?}', [
	'uses' => 'TaskController@putTaskUpdate',
	'as' => 'task.update'
]);

//delete
Route::delete('/tasks/{task_id?}', [
	'uses' => 'TaskController@deleteTaskDelete',
	'as' => 'task.delete'
]);
