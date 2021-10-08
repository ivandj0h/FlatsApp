@extends('layouts.main')
    @section('container')
        <div class="col-lg-12 text-center mt-5">
            <h1>{{ $title }}</h1>
            <h4>Find Flats here!</h4>
        </div>
        <div class="col-md-4 offset-md-4 mt-1 pt-3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search ......" aria-label="Recipient's username">
            {{-- <div class="input-group-append">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
            </div> --}}
            </div>
        </div>
    @endsection