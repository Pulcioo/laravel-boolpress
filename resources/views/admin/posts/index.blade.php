@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Tutti i posts</h1>
            <a class="btn btn-primary mb-3" href="{{ route('admin.posts.create') }}">Nuovo Post</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITOLO</th>
                    <th>SLUG</th>
                    <th>TAGS</th>
                    <th>AZIONI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            @foreach ($post->tags as $tag)
                                <span>{{ $tag->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $post->slug }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.posts.show', $post->id) }}">DETTAGLI</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}">MODIFICA</a>
                        </td>
                        <td>
                            <form class="d-inline-block" action="{{ route('admin.posts.destroy', $post->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
