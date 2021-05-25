@extends('layouts.main')

@section('title')
    Contact
@endsection

@section('content')
    <h1>Hello from1 Contact</h1>
    <form action="">
        <input type="text" name="" id="">
        <input type="date" name="" id="">
        <input type="password" name="" id="">
    </form>

    @include('home.contacts.form1')

    <h1>Hello from3 Contact</h1>
    <form action="">
        <input type="text" name="" id="">
        <input type="password" name="" id="">
    </form>
@endsection