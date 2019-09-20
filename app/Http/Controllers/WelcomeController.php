<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    function __construct()
    {
//        return $this->middleware('auth');
    }

    public function welcome(){

//        if(Auth::user()->isAdmin()) {
//          $posts = Post::with('comments')->get();
//        }
//        else {
//            $posts = Post::where('user_id', Auth::user()->id)->with('comments')->get();
//        }

        $posts = Post::with('comments')->paginate(5);
        return view('welcome', compact('posts'));

    }
}
