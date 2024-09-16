<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\eventosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\AjustesController;
use App\Http\Controllers\imagenesController;
use Illuminate\Support\Facades\Route;

/*
|----------------------------


----------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::resource('Agenda', eventosController::class);
    Route::resource('Users', UserController::class);
    Route::resource('Roles', RolController::class);
    Route::resource('Ajustes',AjustesController::class);
    Route::post('imagenes', [imagenesController::class , 'store'])->name('imagen.store');
    Route::delete('imagenes/{id}', [imagenesController::class, 'destroy'])->name('imagen.delete');
    Route::get('obtenerEvento/{id}', [eventosController::class, 'obtenerEvento'])->name('optenerEvent');
    Route::post('createAgendaBack', [eventosController::class, 'createAgendaBack'])->name('agenda.admin');
    Route::get('/calendar/events', [eventosController::class, 'calendarEvents'])->name('calendarEvents');
});
require __DIR__.'/auth.php';