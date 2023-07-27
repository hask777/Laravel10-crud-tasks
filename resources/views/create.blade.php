@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    {{ $errors }}
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div>
            <label for="title">
                Title
            </label> 
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="description">Desctiprion</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>

        <div>
            <label for="long_description">Long Desctiprion</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Add task</button>
        </div>
       
    </form>

@endsection