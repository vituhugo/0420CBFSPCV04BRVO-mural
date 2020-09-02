<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function mural() {
        $posts = Post::all();
        return view('mural', ['posts' => $posts]);
    }
}
