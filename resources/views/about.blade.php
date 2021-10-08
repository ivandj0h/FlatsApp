
@extends('layouts.main')
    @section('container')
        <div class="col-lg-12 text-center mt-5">
            {!! file_get_contents('assets/images/logo.svg') !!}
            <h4>Welcome!</h4>
        </div>
        @foreach ($contents as $c)
        <p class="row justify-content-md-center">{{ $c['contents'] }}</p>
        @endforeach
    @endsection