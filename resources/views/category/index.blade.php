@extends('layouts.backend');

@section('title')
    Categories
@endsection

@section('content')
    <h1>Categories</h1>

    <div class="card">
        {{-- <div class="card-header border-0">
            <h3 class="mb-0">My Postss</h3>
        </div> --}}
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Name</th>

                        <th scope="col" class="sort" data-sort="status">Edit</th>
                        {{-- <th scope="col">Users</th> --}}
                        <th scope="col" class="sort" data-sort="completion">Delete</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($categories as $cat)
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">{{ $cat->name }}</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                <a class="nav-link" href="{{ route('categories.edit', $cat->id) }}">
                                    <i class="fas fa-pen text-warning text-lg"></i>
                                </a>
                            </td>
                            <td>
                                <a class="nav-link" href="#" onclick='confirmDelete({{ $cat->id }})'>
                                    <i class="fas fa-trash text-danger text-lg"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <h4 class="text-left ml-2 mt-2">No categories yet...</h4>
                            </td>
                        </tr>
                    @endforelse
                    <form action="{{ route('categories.destroy', 0) }}" method="POST" id="deleteForm">
                        @csrf
                        <input type="hidden" name="id" id="deletedID">
                        @method('delete')
                    </form>

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
                    document.getElementById('deletedID').value = id;
                    document.getElementById('deleteForm').submit();
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
