@extends('layouts.backend')

@section('content')

    <div class="row">
        <div class="col-2 mr-5">
            <div class="card" style="width: 18rem; height:23rem;">
                <img class="card-img-top" src="{{ '/storage/images/' . auth()->user()->image }}" alt="Card image cap">
                <div class="card-body">
                    <a href="#" class="btn btn-primary d-flex justify-content-center">Edit</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">My Profile</h1>
                    <form action="{{ route('user.update', auth()->user()->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="name"
                                    value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    value="{{ auth()->user()->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" {{ auth()->user()->password }}>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary float-right">Save Changes</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
