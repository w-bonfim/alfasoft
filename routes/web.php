<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContactController::class, "index"])->name("contact.index");
Route::get('/create', [ContactController::class, "create"])->name("contact.create");
Route::post('/', [ContactController::class, "store"])->name("contact.store");
Route::get('/{id}', [ContactController::class, "show"])->name("contact.show");
Route::get('/edit/{id}', [ContactController::class, "edit"])->name("contact.edit");
Route::put('/{id}', [ContactController::class, "update"])->name("contact.update");
Route::delete('/{id}', [ContactController::class, "destroy"])->name("contact.destroy");

