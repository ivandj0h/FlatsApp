<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flat;

class SearchController extends Controller
{
    public function index()
    {
        $search = Flat::latest();

        if(request('search')) {
            $search->where('name', 'like', '%' .request('search') . '%');
        }

        dd($search);
        return view('home', [
            'title' => "FlatsApp",
            'search' => $search->get(),
        ]);
    }
}
