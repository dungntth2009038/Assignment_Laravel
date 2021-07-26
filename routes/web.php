<?php

use App\Models\Apartments;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/create',[Apartments::class,'create']);
Route::post('/admin/create',[Apartments::class,'store']);
Route::get('/admin/list',[Apartments::class,'list']);
Route::get('/admin/edit/{id}',[Apartments::class,'update']);
Route::post('/admin/edit/{id}',[Apartments::class,'save']);
Route::get('/admin/delete/{id}',[Apartments::class,'delete']);
