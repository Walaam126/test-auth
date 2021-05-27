@extends('layouts.backend');

@section('title')
    My Posts
@endsection

@section('content')
    <h1>My Posts</h1>

    <div class="card">
        {{-- <div class="card-header border-0">
            <h3 class="mb-0">My Postss</h3>
        </div> --}}
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Title</th>
                        <th scope="col" class="sort" data-sort="budget">Content</th>
                        <th scope="col" class="sort" data-sort="status">Edit</th>
                        {{-- <th scope="col">Users</th> --}}
                        <th scope="col" class="sort" data-sort="completion">Delete</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($posts as $post)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{ $post->title }}</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">

                                {{ $post->content }}
                            </td>
                            <td>
                                <a class="nav-link" href="{{ route('posts.edit', $post->id) }}">
                                    <i class="fas fa-pen text-warning text-lg"></i>
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick='confirmDelete({{ $post->id }})'>
                                    <i class="fas fa-trash text-danger text-lg"></i>
                                </a>
                            </td>
                        </tr>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                            id='deleteForm{{ $post->id }}'>
                            @csrf
                            @method('DELETE')
                        </form>
                    @empty
                        {{-- <p>No Posts</p> --}}
                        <tr>
                            <td>
                                <h4 class="text-left ml-2 mt-2">No posts yet...</h4>
                            </td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>
        <!-- Card footer -->
    </div>




    <script>
        function confirmDelete(id) {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + id).submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }

    </script>


@endsection
