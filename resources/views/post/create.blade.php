@extends('layouts.backend');

@section('title')
    My Posts
@endsection

@section('content')
    <h1>Add Post</h1>
    <div class="row">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                name="title" id="title" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <label for="content">Content</label>
            <textarea name="content" class="form-control @error('title') is-invalid @enderror" id="content" rows="5"
                required>
                        {{ old('content') }}
                    </textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
