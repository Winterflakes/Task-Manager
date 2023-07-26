<!-- resources/views/tasks/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <a href="{{ route('tasks.index') }}">Back to List</a>
    <a href="{{ route('tasks.edit', $task->id) }}">Edit Task</a>
    @endsection
</body>
</html>
