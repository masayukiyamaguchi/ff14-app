<?php

namespace App\Http\Controllers\MovieSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\moviesearch\Moviesearch_data;

class MoviePlayController extends Controller
{
    //
    public function index($id)
    {

        //クエリビルダーの記述
        $all = Moviesearch_data::where("id",$id)->get();

        return view("MovieSearch.movieplay",["id"=>$id , "all"=>$all]);
    }

    

}
