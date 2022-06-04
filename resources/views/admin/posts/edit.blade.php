@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-5">Modifica il post {{ $post->id }}</h1>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Tutti i posts</a>
        </div>
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Titolo</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Inserisci il titolo" value="{{ old('title', $post->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Contenuto</label>
                <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="8"
                    required>{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select name="category_id">
                    <option value="">Scegli categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == old('category->id', $post->category_id) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Aggiorna il post</button>
            </div>
        </form>
    </div>
@endsection
