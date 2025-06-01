<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex">
    <nav class="w-64 h-screen bg-gray-800 text-white p-6">
        <div class="space-y-4">
            <h2 class="text-xl font-bold mb-6">Todo List</h2>
            <a href="{{ route('addtask') }}" class="block py-2 px-4 hover:bg-gray-700 rounded-md transition-colors">
                <span class="text-gray-300 hover:text-white">Add Task</span>
            </a>
            <a href="{{ route('Showtasks') }}" class="block py-2 px-4 hover:bg-gray-700 rounded-md transition-colors">
                <span class="text-gray-300 hover:text-white">Show All Tasks</span>
            </a>
        </div>
    </nav>
    <main class="flex-1 p-8">
        @yield('AddTasks')
        @yield( 'Tasks')
        @yield('Update')
    </main>
</body>
</html>
