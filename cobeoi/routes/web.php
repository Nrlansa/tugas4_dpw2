<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Controller;
use Illuminate\Routing\RouteUrlGenerator;

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
    return view('welcome');
});

Route::get('', function(){
    return view('tamplate.base');
});

Route::get('Cobe', [TestController::class, 'showDashboard']);
Route::get('pro', [ProdukController::class, 'index']);
Route::get('in', [TestController::class,'showlogin']);
Route::get('kat', [TestController::class, 'showkategori']);
Route::get('out', [TestController::class,'showlogout']);
Route::get('up', [TestController::class, 'showuserprofil']);


Route::resource('produk', ProdukController::class);
//Route::get('/produk/create', [ProdukController::class, 'create']);
//Route::Post('produk', [ProdukController::class, 'store']);
//Route::get('produk/{produk}',[ProdukController::class,'show']);
//Route::get('/{produk}/edit',[ProdukController::class,'edit']);
//Route::put('produk/{produk}',[ProdukController::class,'update']);
//Route::delete('produk/{produk}',[ProdukController::class,'destroy']);
