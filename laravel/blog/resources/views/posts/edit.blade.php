<x-app-layout>

    <a href="../">Volver</a>
    <h1>Editar Post</h1>
    <form action="../{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br><br>
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category" value="{{ $post->category }}">
        <br><br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
        <br><br>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>
