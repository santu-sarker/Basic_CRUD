<?php

use App\Http\Controllers\CRUD_Process\Basic_Crud;
use App\Http\Controllers\CRUD_Process\Query_BuilderController;
use App\Http\Controllers\ElequentCarController;
use App\Http\Controllers\Elequent_relation\bloggerController;
use App\Http\Controllers\Elequent_relation\commentController;
use App\Http\Controllers\Elequent_relation\postController;
use App\Http\Controllers\TaskModelController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/add_task', [TaskModelController::class, 'index']);

Route::get('/edit_task', [TaskModelController::class, 'edit_task']);

Route::get('/', [Basic_Crud::class, 'index']);

Route::get('/insert_user', [Basic_Crud::class, 'insert_user']);
Route::get('/update_user', [Basic_Crud::class, 'edit_user']);
Route::get('/model_user', [Basic_Crud::class, 'model_user']);
Route::get('/show_user', [Basic_Crud::class, 'show_data']);
Route::get('/delete/user/{id}', [Basic_Crud::class, 'delete_user']);

Route::prefix('Query_Builder')->group(function () {
    Route::get('show_data', [Query_BuilderController::class, 'show_data']);
    Route::get('insert_data', [Query_BuilderController::class, 'insert_data']);
    Route::get('update_data', [Query_BuilderController::class, 'update_data']);
});

Route::prefix('Elequent')->group(function () {
    Route::resource('users', ElequentCarController::class);
});
// Route::resource('users', ElequentCarController::class);
// Route::resource('model', modelController::class);

Route::prefix('Relationship')->group(function () {
    Route::get('bloggers', [bloggerController::class, 'bloggers']);
    Route::get('bloggers/{blogger_id}', [bloggerController::class, 'bloggers_post'])->name('blogger.show');
    Route::get('posts', [postController::class, 'posts']);
    Route::get('comments', [commentController::class, 'comments']);
});
