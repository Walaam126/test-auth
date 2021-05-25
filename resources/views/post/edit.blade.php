@extends('layouts.backend');

@section('title')
    My Posts
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Edit Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}"
                name="title" id="title" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <label class="mt-4" for="content">Content</label>
            <textarea name="content" class="form-control @error('title') is-invalid @enderror" id="content" rows="5"
                required>
    {{ $post->content }}
    </textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <br />
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>
    </div><br />
    <br>
@endsection
