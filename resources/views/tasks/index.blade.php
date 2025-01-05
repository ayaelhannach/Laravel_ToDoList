<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div>
            @extends('layouts.app')

            @section('content')
                <div class="container">
                    <h1>To-do List</h1>
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add a new task</a>

                    <div class="card-container">
                        @foreach ($tasks as $task)
                            <div class="card">
                                <h3>
                                    <a href="{{ route('tasks.show', $task->id) }}">
                                        {{ $task->title }}
                                    </a>
                                </h3>
                                <p>{{ $task->description }}</p>

                                <div class="actions">
                                    @if (!$task->is_completed)
                                    <form action="{{ route('tasks.complete', $task->id) }}" method="POST" id="complete-form-{{ $task->id }}">
                                        @csrf
                                        @method('PATCH')
                                        <a href="{{ route('tasks.complete', $task->id) }}" class="btn btn-warning">Mark as Completed</a>
                                    </form>  
                                    @else
                                        <span style="color: green; font-weight: bold;">Completed</span>
                                    @endif

                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>

                                    <a href="{{ route('tasks.destroy', $task->id) }}" class="btn btn-warning">Delete</a>

                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endsection

    </div>
</body>
</html>
