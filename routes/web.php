<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\CrudController;
use App\HTTP\Controllers\Users;

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

Route::get('/', function () {
    return view('welcome');
});

//crud
Route::view('/insert','insert');
Route::post('insert-data',[CrudController::class,'store'] );
Route::get('show',[CrudController::class,'index']);
Route::get('edit/{id}',[CrudController::class,'edit']);
Route::post('update',[CrudController::class,'update'])->name('data.update');
Route::get('delete/{id}',[CrudController::class,'delete']);


Route::view('noaccess','noaccess');
Route::get('get-api',[Users::class,'getApi']);

//group middleware
// Route::group(['middleware']=>['group middleware ka name'],function(){
// 	Route::view('/insert','create');
// 	Route::get('show',[CrudController::class,'index']);
// });
   
//route middleware
// Route::view('insert','create')->middleware('route middleware array ka name');
//Route::view('index','index')->middleware('route middleware array ka name');;




