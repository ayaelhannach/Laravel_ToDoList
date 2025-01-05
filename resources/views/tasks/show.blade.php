<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @extends('layouts.app')

        @section('content')
            <h1>{{ $task->title }}</h1>
            <p>{{ $task->description }}</p>
            <p>{{ $task->is_completed ? 'Completed' : 'Not completed' }}</p>
            <a href="{{ route('tasks.edit', $task->id) }}">Update</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endsection
    </div>
</body>
</html>