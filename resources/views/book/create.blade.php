    {{-- add new modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">New Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('books.store') }}" method="POST" id="addBookForm"
                        enctype="multipart/form-data">
                        @csrf
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}" name="title" id="ctitle" required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror


                        <div class="form-group mt-4">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id" id="ccategory_id">
                                <option value="" selected disabled>Please select</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <label class="mt-4" for="image">Image</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                            id="image">
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <br />
                        {{-- <button type="submit" class="btn btn-primary float-right">Submit</button> --}}
                        <input type="hidden" id="genre" name="genre" value="NA">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addBook()">Add</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        function addBook() {

            var res = document.getElementById('addBookForm').submit();
            console.log(res);
        }

    </script>
