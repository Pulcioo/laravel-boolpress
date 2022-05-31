@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Visualizzazione post {{ $post->id }}</h1>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Tutti i posts</a>
        </div>
        <div class="mt-4">
            <h3>Titolo</h3>
            <p>{{ $post->title }}</p>
            <h3>Contenuto</h3>
            <p>{{ $post->content }}</p>
            <h3>Slug</h3>
            <p>{{ $post->slug }}</p>
        </div>
    </div>
@endsection
