<?php

namespace App\Http\Controllers;
use App\Models\comment;
use App\Models\post;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function postIndex(){
      $posts=post::all();
      return view('index',compact('posts'));
    }
}
