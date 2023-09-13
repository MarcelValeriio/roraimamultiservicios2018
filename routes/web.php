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
Route::get('/roraima/proyectos', [RoraimaController::class, 'projects'])->name('roraima.works');
Route::get('/roraima/detalles-/{id}', [RoraimaController::class, 'project'])->name('roraima.details');
Route::view('/roraima/sobre-Nosotros', [RoraimaController::class, 'about'])->name('roraima.about');
Route::get('/roraima/contactanos', [RoraimaController::class, 'contact'])->name('roraima.contact');
Route::get('/roraima/servicios', [RoraimaController::class, 'services'])->name('roraima.services');

Route::post('contacto', [RoraimaController::class, 'contacto'])->name('contacto');




/*Route::get('/roraima/Detalles-de-proyectos', [RoraimaController::class, 'details'])->name('roraima.details');*/