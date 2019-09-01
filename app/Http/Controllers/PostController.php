<?php

// PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
      $post = new Post([
        'descricao' => $request->get('descricao'),
        'apresentacao' => $request->get('apresentacao'),
        'nomePrincipioAtivo' => $request->get('nomePrincipioAtivo'),
        'empresa' => $request->get('empresa')
      ]);

      $post->save();

      return response()->json('Registrado com sucesso!');
    }

    public function index()
    {
      return new PostCollection(Post::all());
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return response()->json($post);
    }

    public function update($id, Request $request)
    {
      $post = Post::find($id);

      $post->update($request->all());

      return response()->json('Registro Alterado!');
    }

    public function delete($id)
    {
      $post = Post::find($id);

      $post->delete();

      return response()->json('Registro excluído!');
    }
}