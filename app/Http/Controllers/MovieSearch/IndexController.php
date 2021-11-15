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
            ->orderBy("view_count","DESC")
            ->take(50)
            ->get();

        foreach($searchdatas as $searchdata)
        {
            //視聴回数挿入
            $view_count_str = $this -> numOfDigitsTo2($searchdata["view_count"]);
            $searchdata -> view_count_str = $view_count_str;

            //投稿日挿入
            $published_at_str = $this -> DateToSlash($searchdata["published_at"]);
            $searchdata -> published_at_str = $published_at_str;
        }

        return view("MovieSearch.index",["searchdatas"=>$searchdatas]);
    }




    public function ajax(Request $request)
    {
        //クエリビルダーの記述
        $jsonRequest = $request->all();
        $dataContents = $jsonRequest["dataContents"];
        
        //ソート
        $sort_view_count = $jsonRequest["sort_view_count"];
        $sort_published_at = $jsonRequest["sort_published_at"];

        if($sort_view_count != "NONE")
        {
            $orderBy = "view_count";
            $orderBy_val = $sort_view_count;
        }else if($sort_published_at != "NONE")
        {
            $orderBy = "published_at";
            $orderBy_val = $sort_published_at;
        }else{

        }


        //フィルター
        $filter_bool_vc = $jsonRequest["filter_bool_vc"];
        
        if($filter_bool_vc == "NONE")
        {
            $filter_bool_vc = "";
        }else if($filter_bool_vc == "true")
        {
            $filter_bool_vc = 1;
        }else{
            $filter_bool_vc = 0;
        }


        //データベースからデータの抽出
        $searchdatas = Moviesearch_data::
            where("contents",$dataContents)
            ->where("bool_vc",$filter_bool_vc)
            ->orderBy($orderBy,$orderBy_val)
            ->take(50)
            ->get();

        
        //データの追加
        foreach($searchdatas as $searchdata)
        {
            //視聴回数挿入
            $view_count_str = $this -> numOfDigitsTo2($searchdata["view_count"]);
            $searchdata -> view_count_str = $view_count_str;

            //投稿日挿入
            $published_at_str = $this -> DateToSlash($searchdata["published_at"]);
            $searchdata -> published_at_str = $published_at_str;
        }    

        return $searchdatas;
    }




    //視聴回数の表記を変換
    public function numOfDigitsTo2($num)
    {
        if($num / 10000 <1 )
        {
            $ret = (string)$num." 回視聴";
            return $ret;

        }else if($num / 100000 <1 )
        {
            $num = round($num/10000,1);
            $ret = (string)($num) ."万 回視聴";
            return $ret;

        }else if($num / 1000000 <1 )
        {
            $num = round($num/10000,1);
            $ret = (string)($num)."万 回視聴";
            return $ret;

        }else
        {
            $num = round($num/10000,1);
            $ret = (string)($num)."万 回視聴";
            return $ret;
        }
    }
    
    //投稿日変換
    public function DateToSlash($date)
    {
        $left10 = substr($date,0,10);
        $left10Slash = str_replace("-","/",$left10);
        return $left10Slash;
    }
    

    
}
