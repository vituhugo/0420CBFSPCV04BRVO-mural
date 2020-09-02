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

    public function criarPost(Request $request) {
        //Salva um post no banco.
        $post = new Post();
        $post->texto = $request->texto;
        $post->user = $request->user;
        $post->save();

        return response()->json($post);
    }

    public function editarPost(Request $request, $id) {
        $post = Post::find($id);
        $post->texto = $request->texto;
        $post->user = $request->user;
        $post->save();

        return response()->json($post);
    }

    public function deletar(Request $request, Post $post) {
        $post->delete();

        return response()->json(["mensagem" => "registro deletado."]);
    }

    public function listar(Request $request) {
        $posts = Post::all();
        return response()->json($posts);
    }
}
