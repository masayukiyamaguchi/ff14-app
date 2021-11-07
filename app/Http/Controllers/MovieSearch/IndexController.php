<?php

namespace App\Http\Controllers\MovieSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index()
    {
        return view("MovieSearch.index");
    }

    
}
