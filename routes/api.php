<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// USERS
Route::get('users', 'UserController@index');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');
Route::get('users/{token}', 'UserController@showByToken');
// TASK LISTS
Route::get('task_lists', 'TaskListController@index');
Route::get('task_lists/{userId}', 'TaskListController@show');
Route::post('task_lists', 'TaskListController@store');
Route::put('task_lists/{id}', 'TaskListController@update');
Route::delete('task_lists/{id}', 'TaskListController@delete');
// TASKS
Route::get('tasks', 'TaskController@index');
Route::get('tasks/{taskListId}', 'TaskController@getTasksByTaskListId');
Route::post('tasks', 'TaskController@store');
Route::put('tasks/{id}', 'TaskController@update');
Route::delete('tasks/{id}', 'TaskController@delete');
// TASK STATUS
Route::get('task_status', 'TaskStatusController@index');
Route::get('task_status/{id}', 'TaskStatusController@show');
Route::post('task_status', 'TaskStatusController@store');
Route::put('task_status/{id}', 'TaskStatusController@update');
// TASK PRIORITIES
Route::get('task_priorities', 'TaskPriorityController@index');
Route::get('task_priorities/{id}', 'TaskPriorityController@show');
Route::post('task_priorities', 'TaskPriorityController@store');
Route::put('task_priorities/{id}', 'TaskPriorityController@update');
// PRIORITY CODES
Route::get('priority_codes', 'PriorityCodeController@index');
Route::get('priority_codes/{id}', 'PriorityCodeController@show');
Route::post('priority_codes', 'PriorityCodeController@store');
Route::put('priority_codes/{id}', 'PriorityCodeController@update');
// AUTHORIZATION
Route::post('login', 'LoginController@login');