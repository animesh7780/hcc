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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/home'); // Redirect to the 'home' route
})->name('dashboard');






Route::get('/admin_doctor_view',[AdminController::class,'addview']);


Route::post('/upload_doctor',[AdminController::class,'upload']);






Route::('/appointment',[Homecontroller::class,'appointment']);


Route::get('/myappointment',[Homecontroller::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[Homecontroller::class,'cancel_appoint']);

