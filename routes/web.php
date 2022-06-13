<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectorController;

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

Route::get('show', [SectorController::class, 'show'])->name('showSectors');
Route::post('store', [SectorController::class, 'store'])->name('storeSectors');
