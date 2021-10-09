<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Search;

class SearchController extends Controller
{
    public function index()
    {
        $search = Search::latest();

        if(request('search')) {
            $search->where('name', 'like', '%' .request('search') . '%');
        }

        return view('home', [
            'search' => $search->get(),
        ]);
    }
}
