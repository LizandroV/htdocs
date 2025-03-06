<x-app-layout title="{{ $post->title }}">
    <a href="../post">Volver</a>
    <h1>{{ $post->title }}</h1>
    <b>Categoria</b>
    <p>{{ $post->category }}</p>
    <p>{{ $post->content }}</p>

    <a href="../post/{{ $post->id }}/edit">Editar</a>

    <form action="../post/{{ $post->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
</x-app-layout>
