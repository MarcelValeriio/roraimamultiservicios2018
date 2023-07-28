<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoraimaController;

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

Route::view('/roraima', [RoraimaController::class, 'index'])->name('roraima.index');
Route::view('/roraima/Trabajos', [RoraimaController::class, 'works'])->name('roraima.works');
Route::view('/roraima/Sobre-Nosotros', [RoraimaController::class, 'about'])->name('roraima.about');
Route::get('/roraima/Contactanos', [RoraimaController::class, 'contact'])->name('roraima.contact');
Route::post('contacto', [RoraimaController::class, 'contacto'])->name('contacto');
