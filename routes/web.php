<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OffreController;
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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/societe', function () {
//     return view('societe.offres');
// });
// Route::get('/offres', function () {
//     return view('societe.offres');
// });

// Route::get('/edit-offre', function () {
//     return view('societe.edit-offre');
// });



Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// controller deresourcepour offre
Route::resource('offres', OffreController::class);