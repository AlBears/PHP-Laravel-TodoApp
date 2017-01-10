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

Route::get('/', function () {
    return view('auth.login');
});

Route::auth();

Route::resource('todolists', 'TodoListsController');
Route::resource('todolists.tasks', 'TasksController',
    ['only' => ['store', 'update', 'destroy']
  ]);
