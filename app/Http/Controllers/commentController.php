<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function commentIndex(){
        $comments=comment::all('post-id');
        return view('index',compact('comments'));
    }
}
