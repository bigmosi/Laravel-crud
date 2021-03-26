<?php
use App\Models\MyApp;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//Display All Task
Route::get('/MyApp', function () {
    return view('MyApp');
});
//Add New Task

Route::post('/MyApp', function(Request $request){

});
//Deleting An Existing Task
Route::delete('/MyApp/{id}', function($id){

});
