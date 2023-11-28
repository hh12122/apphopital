<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/register',[HomeController::class,'register'])->name('register');
//Route::get('/r',[HomeController::class,'indexx']);
Route::get('/',[HomeController::class,'indexx']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload'])->name('upload_doctor');
Route::post('/appointment',[HomeController::class,'uploadappoint'])->name('appointment');
Route::get('/myappointment',[HomeController::class,'myappoint'])->name('myappointment');
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel'])->name('cancel_appoint');
Route::get('/show_appoint',[AdminController::class,'show'])->name('show_appoint');
Route::get('/approved/{id}',[AdminController::class,'approved'])->name('approved');
Route::get('/canceled/{id}',[AdminController::class,'canceled'])->name('canceled');
Route::get('/show_doctor',[AdminController::class,'showdoctor'])->name('show_doctor');
Route::get('/updatedoc/{id}',[AdminController::class,'update'])->name('updatedoc');
Route::get('/deletedoc/{id}',[AdminController::class,'delete'])->name('deletedoc');
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor'])->name('editdoctor');
Route::get('/emailview/{id}',[AdminController::class,'emails'])->name('emailview');
Route::post('/sendemail/{id}',[AdminController::class,'sendemail'])->name('sendemail');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');
