@extends('layouts.main')
    @section('container')
        <div class="col-lg-12 text-center mt-5">
            <h1>{{ $title }}</h1>
            <h4>Welcome!</h4>
        </div>
            <p>{{ $about }}</p>
    @endsection