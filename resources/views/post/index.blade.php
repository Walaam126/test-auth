@extends('layouts.backend');

@section('title')
    My Posts
@endsection

@section('content')
    <div class="row">
        <h1>My Posts</h1>
        @forelse ($posts as $post)
            <li>{{ $post->title }}</li>
        @empty
            <div>
                <p>No Posts</p>
            </div>
        @endforelse

    </div>
@endsection
