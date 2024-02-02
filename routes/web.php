<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('welcome');
});
//PANEL
Route::get('/setitings', function () {
    return view('Admin.setitings');
});
Route::get('/tickets', function () {
    return view('Admin.tickets');
});
//PAGES
Route::get('/Navbar', function () {
    return view('PAGES.Navbar');
});
Route::get('/Servicios', function () {
    return view('PAGES.Servicios');
});
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home',[HomeController::class, 'index']);
Route::post('/home',[HomeController::class, 'index']);
    





//Route::POST('/modal',[RegisterController::class, 'register']);
//Route::get('registro', 'addusercontroller@registro');
//Route::get('registro', [RegisterController::class, 'registro']);
