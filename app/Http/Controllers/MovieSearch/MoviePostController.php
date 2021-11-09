<?php

namespace App\Http\Controllers\MovieSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\moviesearch\Moviesearch_data;

class MoviePostController extends Controller
{

    public function Index()
    {
        return view("MovieSearch.post.index");
    }

    public function InsertData(Request $request)
    {
        //データの取得
        $alldatas = $request->all();
        $movie_url = $alldatas["movie_url"];

        if(array_key_exists("bool_vc",$alldatas))
        {
            $bool_vc = true;
        }else
        {
            $bool_vc = false;
        }

        if(array_key_exists("bool_guide",$alldatas))
        {
            $bool_guide = true;
        }else
        {
            $bool_guide = false;
        }

        if(array_key_exists("bool_clear",$alldatas))
        {
            $bool_clear = true;
        }else
        {
            $bool_clear = false;
        }

        if(array_key_exists("bool_act",$alldatas))
        {
            $bool_act = true;
        }else
        {
            $bool_act = false;
        }
        $play_job = $alldatas["play_job"];
        $contents = $alldatas["contents"];


        //APIで動画データを取得
        

        //取得したデータからデータベースへ入れるデータへ変換


        $datas = new Moviesearch_data();
        $datas -> movie_title = "testtitle";
        $datas -> channel_name = "testtitle";
        $datas -> samneil_img = "testtitle";
        $datas -> channel_img = "testtitle";
        $datas -> movie_id = "testtitle";
        $datas -> channel_id = "testtitle";
        $datas -> movie_discription = "testtitle";
        $datas -> bool_vc = true;
        $datas -> bool_guide = true;
        $datas -> bool_clear = true;
        $datas -> bool_act = true;
        $datas -> gimick_process = "testtitle";
        $datas -> view_count = 1000;
        $datas -> good_num = 1000;
        $datas -> member_num = 1000;
        $datas -> play_job = "testtitle";
        $datas -> contents = "testtitle";

       // $datas -> save();

        return;

    }

}
