<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/addtask',[ TodoController::class,'AddView'])->name( 'addtask');

Route::get('Showtasks' , [TodoController::class,'ShowTasksView'])->name( 'Showtasks');