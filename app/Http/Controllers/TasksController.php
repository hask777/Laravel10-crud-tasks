<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        // $tasks = \App\Models\Task::latest()->where('completed', true)->get();
        return view('index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $task = Task::create($data);
        return redirect()->route('tasks.show', $task->id)->with('success', 'Task created !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $data = $request->validated();
        $task->update($data);
    
        return redirect()->route('tasks.show', $task->id)->with('success', 'Task Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted !');
    }
}
