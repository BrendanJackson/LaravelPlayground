<?php

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
// allows use of Task model without writing App\Task
use App\Task;

//Controller includes
Route::get('/tasks', 'TasksController@index');
//= What is happening here, how is the index being passed exactly?
Route::get('tasks/{task}', 'TasksController@show');


Route::get('/', 'PostsController@index');


/* What you need to know
**************************
* For each route, you want a view, controller, elequent model, and a migration
* This doesn't necesarrily mean that they can't be shared, or there aren't exceptions
* generally speaking though follow this
*
* !Note: php artisan make:model -mc //creates a model, controller, and migration
*
* !migrate always seem to break, what do I need to know?
*/
