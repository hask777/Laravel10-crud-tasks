
@extends('layouts.app')

<div>
@section('title', 'The list of tasks')

@section('content')
 
  @foreach ($tasks as $task)
      @if($task)
  
        <div class="text-xs font-bold">
          <a href="{{ route('tasks.show', ['task' => $task->id])}}">{{ $task->title }}</a>
          
        </div>
      @else

      <div>There are no tasks!</div>

      @endif
  @endforeach
  
</div>
@endsection