<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task management')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('tasks.index') }}">Home</a>
            <a href="{{ route('tasks.create') }}">Add a task</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; 2025 Task management. 
    </footer>

    
</body>
</html>