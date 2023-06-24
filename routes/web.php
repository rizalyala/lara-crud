<?php


use App\Http\Controllers\Addform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', [DataController::class ,'dataview'])->name('home');

Route::get('/add',[Addform::class,'formview']);
Route::post('/add',[Addform::class,'postview'])->name('postform');
