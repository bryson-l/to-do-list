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
Route::middleware('auth:api')->get('users', 'UserController@index');
Route::middleware('auth:api')->get('users/{id}', 'UserController@show');
Route::middleware('auth:api')->post('users', 'UserController@store');
Route::middleware('auth:api')->put('users/{id}', 'UserController@update');
Route::middleware('auth:api')->delete('users/{id}', 'UserController@delete');
// TASK LISTS
Route::middleware('auth:api')->get('task_lists', 'TaskListController@index');
Route::middleware('auth:api')->get('task_lists/{id}', 'TaskListController@show');
Route::middleware('auth:api')->post('task_lists', 'TaskListController@store');
Route::middleware('auth:api')->put('task_lists/{id}', 'TaskListController@update');
Route::middleware('auth:api')->delete('task_lists/{id}', 'TaskListController@delete');
// TASKS
Route::middleware('auth:api')->get('tasks', 'TaskController@index');
Route::middleware('auth:api')->get('tasks/{id}', 'TaskController@show');
Route::middleware('auth:api')->post('tasks', 'TaskController@store');
Route::middleware('auth:api')->put('tasks/{id}', 'TaskController@update');
Route::middleware('auth:api')->delete('tasks/{id}', 'TaskController@delete');
// TASK STATUS
Route::middleware('auth:api')->get('task_status', 'TaskStatusController@index');
Route::middleware('auth:api')->get('task_status/{id}', 'TaskStatusController@show');
Route::middleware('auth:api')->post('task_status', 'TaskStatusController@store');
Route::middleware('auth:api')->put('task_status/{id}', 'TaskStatusController@update');
// TASK PRIORITIES
Route::middleware('auth:api')->get('task_priorities', 'TaskPriorityController@index');
Route::middleware('auth:api')->get('task_priorities/{id}', 'TaskPriorityController@show');
Route::middleware('auth:api')->post('task_priorities', 'TaskPriorityController@store');
Route::middleware('auth:api')->put('task_priorities/{id}', 'TaskPriorityController@update');
// PRIORITY CODES
Route::middleware('auth:api')->get('priority_codes', 'PriorityCodeController@index');
Route::middleware('auth:api')->get('priority_codes/{id}', 'PriorityCodeController@show');
Route::middleware('auth:api')->post('priority_codes', 'PriorityCodeController@store');
Route::middleware('auth:api')->put('priority_codes/{id}', 'PriorityCodeController@update');
// AUTHORIZATION
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');