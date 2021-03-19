<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
   public function index(){

       print_r(route('products'));

       return view('products.index');

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
