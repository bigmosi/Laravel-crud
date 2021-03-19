<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;

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

Route::get('/products', [productsController::class, 'index']);
Route::get('/products/{name}', [productsController::class, 'show']);

Route::get('/products/{id}', [productsController::class, 'show'])->where('id', '[0-9]');
Route::get('/products/{name}/{id}', [productsController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);






