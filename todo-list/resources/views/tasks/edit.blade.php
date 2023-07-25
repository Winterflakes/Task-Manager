<!-- resources/views/tasks/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required><br>

        <label for="description">Description:</label><br>
        <textarea name="description" id="description" rows="4" cols="50">{{ $task->description }}</textarea><br>

        <button type="submit">Save</button>
    </form>
    <a href="{{ route('tasks.show', $task->id) }}">Cancel</a>
</body>
</html>
