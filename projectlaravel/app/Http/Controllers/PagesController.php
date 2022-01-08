<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
  public function index(){
      return view('index');
  }

  public function about(){
    //  $posts = DB::select('select * from posts WHERE id = :id',['id' => 3]);
    $id = 4;

    // $posts = DB::table('posts')
    //           ->where('id',$id)
    //           ->get();
    // $posts = DB::table('posts')
    //           ->select('body')
    // //           ->get();
    // $posts = DB::table('posts')
    //           ->where('created_at', '<',now()->subDay())
    //           ->orWhere('title', 'Prof.')
    //           ->get();
    $posts = DB::table('posts')
              // ->whereBetween('id',[1,4])
              // ->whereNotNull('title')
              // ->whereRaw('title')
              ->select('title')
              ->distinct()
              
              ->get();
    dd($posts);

  }
  // public function layouts(){
  //   return view('layouts.app');
  // }
}
