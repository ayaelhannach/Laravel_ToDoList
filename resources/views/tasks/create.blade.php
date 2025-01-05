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

            <h1>Create a Task</h1>

            
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf 
                <div>
                    <label for="title">Titlee :</label>
                    <input type="text" id="title" name="title" required>
                </div>
                
                
                <div>
                    <label for="description">Description :</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <button type="submit">Create</button>
            </form>

            @endsection 

    </div>
</body>
</html>