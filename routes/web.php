<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web joses for your application. These
| joses are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add_doctor_view',[AdminController::class, 'addview']);



Route::get('/add_producto_view',[AdminController::class, 'addproducto']);



Route::post('/upload_producto',[AdminController::class, 'agregar']);
Route::post('/atender',[AdminController::class, 'agregarate']);




Route::post('/upload_doctor',[AdminController::class, 'upload']);




Route::post('/cita',[HomeController::class, 'cita']);

Route::get('/micita',[HomeController::class, 'micita']);

Route::get('/cancelar_cita/{id}',[HomeController::class, 'cancelar_cita']);

Route::get('/mostrar_citas',[AdminController::class, 'mostrar_citas']);

Route::get('/aceptada/{id}',[AdminController::class, 'aceptada']);
Route::get('/rechazada/{id}',[AdminController::class, 'rechazada']);
Route::get('/atendida/{id}',[AdminController::class, 'atendida']);

Route::get('/mostrar_doctor',[AdminController::class, 'mostrar_doctor']);
Route::get('/mostrar_historial',[AdminController::class, 'mostrar_historial']);

Route::get('/eliminar/{id}',[AdminController::class, 'eliminar']);

Route::get('/editar/{id}',[AdminController::class, 'editar']);

Route::post('/editdoctor/{id}',[AdminController::class, 'editdoctor']);


Route::get('/mostrar_producto',[AdminController::class, 'mostrar_producto']);
Route::post('/editproducto/{id}',[AdminController::class, 'editproducto']);
Route::get('/eliminarpro/{id}',[AdminController::class, 'eliminarpro']);
Route::get('/editarpro/{id}',[AdminController::class, 'editarpro']);

Route::get('/atender_cita',[AdminController::class, 'atender_cita']);
Route::get('/atender',[AdminController::class, 'atender']);