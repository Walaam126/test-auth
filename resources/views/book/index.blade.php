@extends('layouts.backend')
@section('title')
    My Books
@endsection
@section('content')

    <div class="d-flex justify-content-between mb-3">
        <div class="justify-content-start">
            <span>
                <h1>My Books</h1>
            </span>
        </div>
        <div class="justify-content-end">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add new
                Book</button>
        </div>
    </div>
    <div class="row ml-3 mt-3">
        <div class="card-deck">
            @forelse ($books as $book)
                <div class="card " style="width: 18rem; height:22rem;">
                    <img src="{{ '/storage/images/' . $book->image }}" class="card-img-top" alt="..." width="200"
                        height="200">
                    <div class="card-body">
                        <h4 class="card-title">{{ $book->title }}</h4>
                        {{-- <p class="card-text">{{ $book->genre }}</p> --}}
                        <p class="card-text">{{ $book->category ? $book->category->name : 'NA' }}</p>
                    </div>

                    <div class="d-flex justify-content-center mb-2">
                        <a class="mr-3" href="#" onclick="fillData('{{ $book->id }}')" data-toggle="modal"
                            data-target="#editBookModal"><i class="fas fa-pen"></i></a>
                        <a class="mr-3" href="#" onclick='confirmDelete({{ $book->id }})'><i
                                class="text-danger fas fa-trash ml-1"></i></a>
                    </div>
                </div>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" id='deleteForm{{ $book->id }}'>
                    @csrf
                    @method('DELETE')
                </form>
            @empty


                <h4 class="text-center">No Books yet...</h4>

            @endforelse
        </div>
    </div>

    @include('book.create')
    @include('book.update')


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

        function fillData(id) {
            $.get("{{ url('books/show') }}/" + id, function(data) {

                document.getElementById('title').value = data.title;
                document.getElementById('category_id').value = data.category_id;
                document.getElementById('updateBookForm').action = '/books/update/' + data.id;
            });
        }

    </script>
@endsection
