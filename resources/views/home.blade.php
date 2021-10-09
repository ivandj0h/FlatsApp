@extends('layouts.main')
    @section('container')
        <div class="col-lg-12 text-center mt-5">
            {!! file_get_contents('assets/images/logo.svg') !!}
            <h4>Find Flats here!</h4>
        </div>
        <div class="col-md-4 offset-md-4 mt-1 pt-3">
            <form action="/search" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search ......" aria-label="Recipient's username" name="search">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        </div>

<div class="row">
    <div class="col-md-6">

    </div>
</div>



    @endsection


