<?php

namespace App\Http\Controllers\MovieSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\moviesearch\Moviesearch_data;

use Google_Client;
use Google_Service_YouTube;

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

        //ムービーURLを動画IDに変換
        $movie_ID = $this -> urlToId($movie_url);


        //エラーならエラーコードを返す
        if($movie_ID == "error")
        {
            return "error001";
        }


        //APIで動画データを取得        
        $datas = $this-> YoutubeApiGetData($movie_ID);

        //チャンネル
        $channeldatas = $this-> YoutubeApiGetDataChannel($datas["channelId"]);


        //サムネイル画像の大きさチェック
        $samneil_img_size = $this-> ImageSizeCheck($datas["thumbnails"]);
        $channel_img_size = $this-> ImageSizeCheck($channeldatas["thumbnails"]);


        $movie_title = $datas["title"];
        $channel_name = $datas["channelTitle"];
        $samneil_img = $datas["thumbnails"][$samneil_img_size]["url"];
        $channel_img = $channeldatas["thumbnails"][$channel_img_size]["url"];
        $channel_id = $datas["channelId"];

        $movie_discription_data =  $datas["localized"]["description"];

   

        //取得したデータからデータベースへ入れるデータへ変換
        $datas = new Moviesearch_data();
        $datas -> movie_title = $movie_title;
        $datas -> channel_name = $channel_name;
        $datas -> samneil_img = $samneil_img;
        $datas -> channel_img = $channel_img;
        $datas -> movie_id = $movie_ID;
        $datas -> channel_id = $channel_id;
        $datas -> movie_discription = $movie_discription_data;
        $datas -> bool_vc = $bool_vc;
        $datas -> bool_guide = $bool_guide;
        $datas -> bool_clear = $bool_clear;
        $datas -> bool_act = $bool_act;
        //$datas -> gimick_process = "";
        //$datas -> view_count = 1000;
        //$datas -> good_num = 1000;
        //$datas -> member_num = 1000;
        $datas -> play_job = $play_job;
        $datas -> contents = $contents;

        $datas -> save();

       return view("MovieSearch.post.postdone",["alldata"=>$datas]);
        

    }


    //ムービーURLを動画IDに変換
    public function urlToId(string $movie_url)
    {    

        //文字列の条件に抽出（エラーになるようなら、ID直入れに変更
        if(strpos($movie_url,'youtu') !== false)
        {

            if(strpos($movie_url,'watch?v=') !== false)
            {
                $y = mb_strpos($movie_url, "watch?v=");
                $movie_id = substr($movie_url, $y+8, 11);
            }else{
                $y = mb_strpos($movie_url, "youtu.be/");
                $movie_id = substr($movie_url, $y+9, 11);
            }           
            

        }else{
            return "error";
        }
        return $movie_id;


    }


    //APIで動画データを取得
    public function YoutubeApiGetData(string $ID)
    {
        // Googleへの接続情報のインスタンスを作成と設定
        $client = new Google_Client();
        $client->setDeveloperKey(env('GOOGLE_API_KEY'));

        // 接続情報のインスタンスを用いてYoutubeのデータへアクセス可能なインスタンスを生成
        $youtube = new Google_Service_YouTube($client);

        // 必要情報を引数に持たせ、listSearchで検索して動画一覧を取得
        $items = $youtube->videos->listVideos('snippet', [
            'id'  => $ID,
        ]);

        // 連想配列だと扱いづらいのでcollection化して処理
        $snippets = collect($items->getItems())->pluck('snippet')->all();

        return $snippets[0];

    }

    //チャンネル
    public function YoutubeApiGetDataChannel(string $ID)
    {
                // Googleへの接続情報のインスタンスを作成と設定
                $client = new Google_Client();
                $client->setDeveloperKey(env('GOOGLE_API_KEY'));
        
                // 接続情報のインスタンスを用いてYoutubeのデータへアクセス可能なインスタンスを生成
                $youtube = new Google_Service_YouTube($client);
        
                // 必要情報を引数に持たせ、listSearchで検索して動画一覧を取得
                $items = $youtube->channels->listChannels('snippet', [
                    'id'  => $ID,
                ]);
        
                // 連想配列だと扱いづらいのでcollection化して処理
                $snippets = collect($items->getItems())->pluck('snippet')->all();

                return $snippets[0];
    }


    public function ImageSizeCheck($thumbnails)
    {

        if(isset($thumbnails["maxres"]))
        {
            return "maxres";
        }else if(isset($thumbnails["standard"]))
        {
            return "standard";
        }else if(isset($thumbnails["high"]))
        {
            return "high";
        }else if(isset($thumbnails["medium"]))
        {
            return "medium";
        }else
        {
            return "default";
        }
        
    }





}
