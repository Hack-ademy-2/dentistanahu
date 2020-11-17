<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/citaprevia', [HomeController::class,'cita'])->name('cita');
Route::post('/programadas', [HomeController::class,'solicitud'])->name('solicitud');
Route::post('/index', [HomeController::class,'nuevocontacto'])->name('nuevocontacto');
Route::get('/programadas', [HomeController::class,'programadas'])->name('programadas');
Route::get('/nosotros', [HomeController::class,'nosotros'])->name('nosotros');
Route::get('/contacto', [HomeController::class,'contacto'])->name('contacto');