<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::post('/generate-pdf', [UserController::class, 'generatePdf'])->name('generate.pdf');
// Route::get('/search', [UserController::class, 'search']);
Route::get('/', [PdfController::class, 'showForm']);
Route::post('/update-pdf', [PdfController::class, 'updatePdf']);