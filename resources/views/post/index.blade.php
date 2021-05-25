@extends('layouts.backend');

@section('title')
    My Posts
@endsection

@section('content')
    <h1>My Posts</h1>
    <div class="row">
        <div>
            <ul>
                @forelse ($posts as $post)
                    <li>{{ $post->title }}</li>
                    <p>{{ $post->content }}</p>
                    <br />
                @empty

                    <p>No Posts</p>

                @endforelse
            </ul>
        </div>
    </div>
@endsection
