<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
   public function index(){
       $title = 'Welcome to my laravel 8 course';
       $description= 'created by Dary';
//       return view('products.index',compact('title', 'description'));
       return view('products.index')->with('title', $title);
   }

   public function about() {
       return 'I am in my page';
   }
}
