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
        $filter_bool_act = $jsonRequest["filter_bool_act"];
        $filter_bool_clear = $jsonRequest["filter_bool_clear"];
        $filter_string_guide = $jsonRequest["filter_string_guide"];
        $filter_language = $jsonRequest["filter_language"];
        $filter_play_job = $jsonRequest["filter_play_job"];
        
        $filter_bool_vc_array = $this ->FilterDoneBool($filter_bool_vc);
        $filter_bool_act_array = $this ->FilterDoneBool($filter_bool_act);
        $filter_bool_clear_array = $this ->FilterDoneBool($filter_bool_clear);
        $filter_string_guide = $this ->FilterDoneGuide($filter_string_guide);
        $filter_language = $this ->FilterDoneLanguage($filter_language);
        $filter_play_job = $this ->FilterDonePlayJob($filter_play_job);

         //データベースからデータの抽出
        $searchdatas = Moviesearch_data::
            where("contents",$dataContents)
            ->whereIn("bool_vc",$filter_bool_vc_array)
            ->whereIn("bool_act",$filter_bool_act_array)
            ->whereIn("bool_clear",$filter_bool_clear_array)
            ->whereIn("string_guide",$filter_string_guide)
            ->whereIn("language",$filter_language)
            ->whereIn("language",$filter_language)
            ->whereIn("play_job",$filter_play_job)
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

    //フィルターval変換
    public function FilterDoneBool($filter_)
    {
        if($filter_ == "NONE")
        {
            $filter_ = [0,1];
            return $filter_;
        }else if($filter_ == "true")
        {
            $filter_ = [1];
            return $filter_;
        }else{
            $filter_ = [0];
            return $filter_;
        }
    }

    public function FilterDoneGuide($filter_)
    {
        if($filter_ == "NONE")
        {
            $filter_ = ["yukkuri","jigoe","jimaku","nonevoice"];
            return $filter_;
        }else{
            $filter_ = [$filter_];
            return $filter_;
        }
    }

    public function FilterDoneLanguage($filter_)
    {
        if($filter_ == "NONE")
        {
            $filter_ = ["language_jp","language_en"];
            return $filter_;
        }else if($filter_ == "true")
        {
            $filter_ = ["language_jp"];
            return $filter_;
        }else{
            $filter_ = ["language_en"];
            return $filter_;
        }
    }


    public function FilterDonePlayJob($filter_)
    {
        $ret = [];
        foreach($filter_ as $item)
        {
            array_push($ret,$item);
        }

        return  $ret;

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






    public function test()
    {        
        return view("MovieSearch.test");
    }





    

    
}
