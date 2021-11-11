<?php

namespace App\Http\Controllers\MovieSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\moviesearch\Moviesearch_data;

class IndexController extends Controller
{
    //

    public function index()
    {
        //クエリビルダーの記述
        $searchdatas = Moviesearch_data::orderBy("id","DESC")->take(8)->get();

        return view("MovieSearch.index",["searchdatas"=>$searchdatas]);
    }

    
}