<x-app-layout title="Post">
    <h1>Posts Creados</h1>

    <a href="post/create">Nuevo Post</a>
    <br><br>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="post/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}

</x-app-layout>
