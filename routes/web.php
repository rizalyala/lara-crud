<?php


use App\Http\Controllers\Addform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class ,'dataview'])->name('home');

Route::get('/add',[Addform::class,'formview']);
Route::post('/add',[Addform::class,'postview'])->name('postform');

Route::delete('/{id}', [DataController::class,'destroy'])->name('deleteData');
Route::get('/update/{id}', [DataController::class,'updateview'])->name('update');
Route::put('/update/{id}', [DataController::class,'update'])->name('updateData');

