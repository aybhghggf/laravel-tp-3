@extends('layouts.basic')
@section('title') All Task @endsection

@section('Tasks')
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
@endif
<h1>Votre Task :</h1>
@foreach ($tasks as $task)
    <div class="bg-white shadow-md rounded-lg p-4 mb-4">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold">{{ $task->title }}</h2>
                <p class="text-gray-600">{{ $task->description }}</p>
            </div>
            <div class="flex space-x-2">
                <a href="{{ route('update',$task->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>
                <form action="{{ route('Delete',$task->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Done</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

@endsection
