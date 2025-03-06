<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

use function Avifinfo\read;
use function Laravel\Prompts\select;

Route::get('/', [HomeController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::get('/post/{post}/edit', [PostController::class, 'edit']);
Route::put('/post/{post}', [PostController::class, 'update']);
Route::delete('/post/{post}', [PostController::class, 'destroy']);

Route::get('prueba', function () {
    // CREAR
    // $post = new Post();

    // $post->title = 'Mi post 3';
    // $post->content = 'Contenido de mi post 3';
    // $post->categoria = 'Cat1';
    // $post->published_at = now();
    // $post->is_active = true;

    // $post->save();

    // return $post;


    // EDITAR
    // $post = Post::where('title', 'Mi primer post')->first();

    // $post->title = 'Mi primer post editado';
    // $post->save();
    // return $post;

    // OBTENER MAS REGISTROS
    // $post = Post::get(); //all()
    // return $post;

    // $post = Post::where('id', '>', 2)->get();
    // return $post;

    // ORDER BY
    $post = Post::where('id', '>=', 1)->orderBy('id', 'desc')
        ->select('id', 'title', 'content')
        ->take(10)
        ->get();
    return $post;

    // ELIMINAR
    // $post = Post::find(3);
    // $post->delete();
    // return "Post Eliminado";

    // $post = Post::find(1);
    // dd($post->is_active);
});
