<!-- resources/views/tasks/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>
</head>
<body>
    
@extends('layouts.app')

@section('content')
    <h1>Add New Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description" rows="4" cols="50"></textarea><br>

        <button type="submit">Save</button>
    </form>
    <a href="{{ route('tasks.index') }}">Cancel</a>
    @endsection
</body>
</html>
