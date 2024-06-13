<?php

use App\Http\Controllers\MapController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\PolylineController;
use App\Http\Controllers\PolygonController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MapController::class, 'index'])->name('index');
Route::get('/table', [MapController::class, 'table'])->name('table');

//Create point
Route::post('/store-point', [PointController::class, 'store'])->name('store-point');

//Delete point
Route::delete('/delete-point/{id}', [PointController::class, 'destroy'])->name('delete-point');

//Edit point
Route::get('/edit-point/{id}', [PointController::class, 'edit'])->name('edit-point');

//Update point
Route::patch('/update-point/{id}', [PointController::class, 'update'])->name('update-point');

//Create polyline
Route::post('/store-polyline', [PolylineController::class, 'store'])->name('store-polyline');

//Delete polyline
Route::delete('/delete-polyline/{id}', [PolylineController::class, 'destroy'])->name('delete-polyline');

//Edit polyline
Route::get('/edit-polyline/{id}', [PolylineController::class, 'edit'])->name('edit-polyline');

//Update Polyline
Route::patch('/update-polyline/{id}', [PolylineController::class, 'update'])->name('update-polyline');

//Create polygon
Route::post('/store-polygon', [PolygonController::class, 'store'])->name('store-polygon');

//Delete polygone
Route::delete('/delete-polygon/{id}', [PolygonController::class, 'destroy'])->name('delete-polygon');

//Edit polygon
Route::get('/edit-polygon/{id}', [PolygonController::class, 'edit'])->name('edit-polygon');

//Update Polygon
Route::patch('/update-polygon/{id}', [PolygonController::class, 'update'])->name('update-polygon');


Route::get('/about', function () {
    return view('about');
});

Route::get('/landingpage', [LandingController::class, 'index'])->name('landingpage');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//table
Route::get('/table-point', [PointController::class, 'table'])->name('table-point');
require __DIR__.'/auth.php';
Route::get('/table-polyline', [PolylineController::class, 'table'])->name('table-polyline');
require __DIR__.'/auth.php';
Route::get('/table-polygon', [PolygonController::class, 'table'])->name('table-polygon');
require __DIR__.'/auth.php';
