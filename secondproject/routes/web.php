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


Route::get('/', function () {
});
//Add New Task

Route::post('/MyApp', function(Request $request){
    $validator = validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if($validator->fails()){
        return redirct('/')
            ->withInput()
            ->withErrors($validator);

    }
    $task = new Task;
    $task->name = $request->name;
    return redirect('/');


});
//Deleting An Existing Task
Route::delete('/MyApp/{id}', function($id){

});

