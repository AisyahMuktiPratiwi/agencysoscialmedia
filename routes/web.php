<?php

use App\Http\Controllers\BidangController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortoController;
use App\Models\User;
use App\Models\Brand;

use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

    return view('dashboard');
});


Route::get('/depan', [DashboardController::class, 'index'])->name('depan');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');








Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/brand', [BrandController::class, 'index'])->name('brand');
Route::get('/tambahbrand', [BrandController::class, 'tambahbrand'])->name('tambahbrand');
Route::post('/insertbrand', [BrandController::class, 'insertbrand'])->name('insertbrand');
Route::get('/tampilkanbrand/{id}', [BrandController::class, 'tampilkanbrand'])->name('tampilkanbrand');
Route::post('/updatebrand/{id}', [BrandController::class, 'updatebrand'])->name('updatebrand');
Route::get('/deletebrand/{id}', [BrandController::class, 'deletebrand'])->name('deletebrand');


Route::get('/porto', [PortoController::class, 'index'])->name('porto');
Route::get('/tambahporto', [PortoController::class, 'tambahporto'])->name('tambahporto');
Route::post('/insertporto', [PortoController::class, 'insertporto'])->name('insertporto');
Route::get('/tampilkanporto/{id}', [PortoController::class, 'tampilkanporto'])->name('tampilkanporto');
Route::post('/updateporto/{id}', [PortoController::class, 'updateporto'])->name('updateporto');
Route::get('/deleteporto/{id}', [PortoController::class, 'deleteporto'])->name('deleteporto');

Route::get('/bidang', [BidangController::class, 'index'])->name('bidang');
Route::get('/tambahbidang', [BidangController::class, 'tambahbidang'])->name('tambahbidang');
Route::post('/insertbidang', [BidangController::class, 'insertbidang'])->name('insertbidang');
Route::get('/tampilkanbidang/{id}', [BidangController::class, 'tampilkanbidang'])->name('tampilkanbidang');
Route::post('/updatebidang/{id}', [BidangController::class, 'updatebidang'])->name('updatebidang');
Route::get('/deletebidang/{id}', [BidangController::class, 'deletebidang'])->name('deletebidang');

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/user', [HomeController::class, 'user'])->name('user');

