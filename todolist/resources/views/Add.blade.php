@extends('layouts.basic')
@section('AddTasks')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Add New Task</h2>
        
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Task Title</label>
                <input type="text" name="title" id="title" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter task title" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" rows="3" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter task description"></textarea>
            </div>

            <div class="mb-4">
                <label for="due_date" class="block text-gray-700 text-sm font-bold mb-2">Due Date</label>
                <input type="date" name="due_date" id="due_date" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors">
                Add Task
            </button>
        </form>
    </div>
</div>
@endsection