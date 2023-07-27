<?php

use App\Http\Controllers\TasksController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/tasks',[TasksController::class, 'index'])->name('tasks.index');


Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');


Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('tasks.show');


Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');



