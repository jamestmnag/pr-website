<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller

{
   public function post() {
       $car = Post::all();
    //    dd($car);
       return view('crude.update.update');
   }
   public function entry() {
       return view('crude.entry.entry');
   }
   public function modify() {
       return view('crude.modify.modify');
   }
   public function update() {
       return view('crude.update.update');
   }
   public function demo() {
       return view('crude.update.demo');
   }
}
