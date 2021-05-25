@extends('layouts.backend')
@section('content')
    <div class="row">
        <!-- Overview -->
        @include('home.content.overview')
        <!-- Performance -->
        @include('home.content.performance')
    </div>
    <div class="row">
        <!-- Page visits -->
        @include('home.content.pagevisits')
        @include('home.content.socialtraffic')
    </div>
@endsection
