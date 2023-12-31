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
    return redirect()->route('tasks.index');
});



Route::get('/tasks',[TasksController::class, 'index'])->name('tasks.index');


Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');


Route::get('/tasks/{task}', [TasksController::class, 'show'])->name('tasks.show');


Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');


Route::get('/tasks/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');


Route::put('/tasks/{task}/update', [TasksController::class, 'update'])->name('tasks.update');


Route::delete('/tasks/{task}', [TasksController::class, 'destroy'])->name('tasks.destroy');


Route::put('/tasks/{task}/complete', [TasksController::class, 'complete'])->name('tasks.complete');




