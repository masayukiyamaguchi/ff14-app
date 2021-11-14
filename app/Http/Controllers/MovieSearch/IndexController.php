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
        $searchdatas = Moviesearch_data::
            where("contents","EdensPromise01")
            ->orderBy("id","ASC")->take(50)
            ->get();

        return view("MovieSearch.index",["searchdatas"=>$searchdatas]);
    }

    public function ajax(Request $request)
    {
        //クエリビルダーの記述
        $jsonRequest = $request->all();
        $dataCpmtemts = $jsonRequest["dataCpmtemts"];

        $searchdatas = Moviesearch_data::
            where("contents",$dataCpmtemts)
            ->orderBy("id","ASC")->take(50)
            ->get();

        return $searchdatas;
    }

    
}
