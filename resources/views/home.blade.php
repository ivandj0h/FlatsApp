@extends('layouts.main')
    @section('container')
        <div class="col-lg-12 text-center mt-5">
            {!! file_get_contents('assets/images/logo.svg') !!}
            <h4>Find Flats here!</h4>
        </div>
        <div class="col-md-4 offset-md-4 mt-1 pt-3">
            <form action="/" method="get">
                {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search ......" aria-label="Recipient's username" name="search" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        </div>

        <div class="row">
            @foreach ($search as $c)              
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $c['name'] }}</h5>
                  <p class="card-text">Location : {{ $c['location'] }}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>



    @endsection


