
@extends('layouts.app')

<div>
@section('title', 'The list of tasks')

@section('content')
  <nav class="mb-4">
    <a href="{{ route('tasks.create') }}" class="link">Add Task</a>
  </nav>
 
  @foreach ($tasks as $task)
      @if($task)
  
        <div class="text-xs font-bold p-1">
          <a href="{{ route('tasks.show', ['task' => $task->id])}}" @class(['font-bold', 'line-through' => $task->completed])>{{ $task->title }}</a>
          
        </div>
      @else

      <div>There are no tasks!</div>

      @endif
  @endforeach

  @if ($tasks->count())
    <nav class="mt-4">
      {{ $tasks->links() }}
    </nav>
  @endif
  
</div>
@endsection