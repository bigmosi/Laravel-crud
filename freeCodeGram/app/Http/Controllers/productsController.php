<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
   public function index(){
       $title = 'Welcome to my laravel 8 course';
       $description= 'created by Dary';
       $data = [
           'productOne' => 'iPhone',
           'productTwo' => 'Samsung'
       ];
//       return view('products.index',compact('title', 'description'));
       //return view('products.index')->with('title', $title);
       return view('products.index')->with('data', $data);
   }

   public function about() {
       return 'I am in my page';
   }
   public function show($name){
       $data = [
           'iPhone' => 'iPhone',
           'Samsung' => 'Samsung'
       ];
    return view('products.index', [
        'products' => $data[$name] ?? 'product' . $name. 'Does  not  exist'
    ]);
   }
}
