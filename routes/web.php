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

// Make the home page also point to the index
Route::get('/', 'TodosController@index');

// This route takes care of the CRUD operations in the TodosController
Route::resource('todo', 'TodosController');

