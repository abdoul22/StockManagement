<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\EmbarquementController;
use App\Http\Controllers\SessioncontroleController;

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
    return view('welcome')->name('home');
});

Route::get('bon_achat', [AchatController::class ,'index'])->name('achat');


Route::get('bon-embarquement', [EmbarquementController::class, 'index'])->name('embarquement');


Route::get('session-controle', [SessioncontroleController::class, 'index'])->name('sessioncontrole.index');
Route::get('show/sessioncontrole', [SessioncontroleController::class, 'show'])->name('sessioncontrole.show');
Route::get('sessioncontrole/create', [SessioncontroleController::class, 'create'])->name('sessioncontrole.create');
Route::post('store', [SessioncontroleController::class, 'store'])->name('sessioncontrole.store');
Route::get('sessioncontrole/sessioncontrole', [SessioncontroleController::class, 'destroy'])->name('sessioncontrole.destroy');
Route::get('sessioncontrole/sessioncontrole/edit', [SessioncontroleController::class, 'edit'])->name('sessioncontrole.edit');





// Route::resource('sessioncontrole', SessioncontroleController::class);
