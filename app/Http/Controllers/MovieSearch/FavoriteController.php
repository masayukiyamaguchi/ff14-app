<?php

namespace App\Http\Controllers\MovieSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\moviesearch\Moviesearch_data;

class FavoriteController extends Controller
{
    //
    public function index(Request $request)
    {

        //データ取得
        $alldatas = $request->all();
        
        //データを配列に整備
        $favorite_list = $alldatas["favorite_list"];
        $favorite_list = explode(",", $favorite_list);

     

        //クエリビルダーの記述
        $searchdatas = Moviesearch_data::
            whereIn('movie_id', $favorite_list)
            ->orderBy("published_at","DESC")
            ->get();


        //お気に入りのコンテンツの配列（仮）
        $contents_datas_pro = array();

        foreach($searchdatas as $searchdata)
        {
            //視聴回数挿入
            $view_count_str = $this -> numOfDigitsTo2($searchdata["view_count"]);
            $searchdata -> view_count_str = $view_count_str;

            //投稿日挿入
            $published_at_str = $this -> DateToSlash($searchdata["published_at"]);
            $searchdata -> published_at_str = $published_at_str;

            //コンテンツ抽出
            
            array_push($contents_datas_pro,$searchdata -> contents); 

        }


        //お気に入りのコンテンツの配列（本番）
        $contents_datas = array();

        //ここ追加して！！ここ追加して！！ここ追加して！！ここ追加して！！ここ追加して！！ここ追加して！！
        $contentsDatas = ["EdensPromise01","EdensPromise02","EdensPromise03","EdensPromise04","EdensPromise05","EdensPromise06","EdensVerse01","EdensVerse02","EdensVerse03","EdensVerse04","EdensGate01","EdensGate02","EdensGate03","EdensGate04","Alphascape01","Alphascape02","Alphascape03","Alphascape04","Alphascape05","Alphascape06","Sigmascape01","Sigmascape02","Sigmascape03","Sigmascape04","Sigmascape05","Sigmascape06","Deltascape01","Deltascape02","Deltascape03","Deltascape04","Deltascape05","Deltascape06","TheSouloftheCreator01","TheSouloftheCreator02","TheSouloftheCreator03","TheSouloftheCreator04","TheBurdenoftheSon01","TheBurdenoftheSon02","TheBurdenoftheSon03","TheBurdenoftheSon04","TheFistoftheFather01","TheFistoftheFather02","TheFistoftheFather03","TheFistoftheFather04","TheFinalCoilofBahamut01","TheFinalCoilofBahamut02","TheFinalCoilofBahamut03","TheFinalCoilofBahamut04","TheSecondCoilofBahamut01","TheSecondCoilofBahamut02","TheSecondCoilofBahamut03","TheSecondCoilofBahamut04","TheBindingCoilofBahamut01","TheBindingCoilofBahamut02","TheBindingCoilofBahamut03","TheBindingCoilofBahamut04"];

        //お気に入りのコンテンツの配列を抽出
        foreach($contentsDatas as $contentsData){
            if(in_array($contentsData, $contents_datas_pro)) {
                array_push($contents_datas,$contentsData); 
            }
        }


        //最終データのまとめ
        $all_datas = array();
        $all_datas += array("searchdatas"=>$searchdatas);
        $all_datas += array("contentsDatas"=>$contentsDatas);


        dump($contents_datas);
        

        return view("MovieSearch.favorite",["all_datas"=>$all_datas]);

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
