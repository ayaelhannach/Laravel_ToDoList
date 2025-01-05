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
            <h1>Edit Tasks</h1>

            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="title">Title :</label>
                <input type="text" name="title" value="{{ $task->title }}" required>
                <br>
                <label for="description">Description :</label>
                <textarea name="description" required>{{ $task->description }}</textarea>
                <br>
                <button type="submit">Update</button>
            </form>
            @endsection

    </div>

</body>
</html>