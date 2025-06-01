<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/addtask',[ TodoController::class,'AddView'])->name( 'addtask');

Route::get('/Showtasks' , [TodoController::class,'ShowTasksView'])->name( 'Showtasks');

Route::post('/store',[ TodoController::class,'StoreTask'])->name('store');

Route::get( '/update/{id}',[ TodoController::class,'ShowUpdatePage'])->name('update');