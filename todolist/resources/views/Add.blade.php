@extends('layouts.basic')
@section('AddTasks')
@if ($errors->any())
    <div class="fixed top-4 right-4 z-50">
        @foreach ($errors->all() as $error)
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-2 rounded shadow-md">
                <p class="font-medium">{{ $error }}</p>
            </div>
        @endforeach
    </div>
@endif
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
            @error('title')
                <p class="text-red-500 text-sm bg-red-100 border border-red-400 rounded-lg p-2">{{ $message }}</p>
            @enderror
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" rows="3" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="Enter task description"></textarea>
            </div>
            @error('description')
                <p class="text-red-500 text-sm bg-red-100 border border-red-400 rounded-lg p-2">{{ $message }}</p>
            @enderror
            <div class="mb-4">
                <label for="due_date" class="block text-gray-700 text-sm font-bold mb-2">Due Date</label>
                <input type="date" name="due_date" id="due_date" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            @error('due_date')
                <p class="text-red-500 text-sm bg-red-100 border border-red-400 rounded-lg p-2">{{ $message }}</p>
            @enderror
            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors">
                Add Task
            </button>
        </form>
    </div>
</div>
@endsection