<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
      $id =7 ;
      $post =DB::table('posts')
      ->where('id', '=', 15)
      ->delete();





dd($post);

    }
}
