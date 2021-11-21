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
        $contentsDatas_jp = ["EdensPromise01"=>"希望の園エデン：再生編1層","EdensPromise02"=>"希望の園エデン：再生編2層","EdensPromise03"=>"希望の園エデン：再生編3層","EdensPromise04"=>"希望の園エデン：再生編4層前半","EdensPromise05"=>"希望の園エデン：再生編4層後半","EdensPromise06"=>"希望の園エデン：再生編4層前後半","EdensVerse01"=>"希望の園エデン：共鳴編1層","EdensVerse02"=>"希望の園エデン：共鳴編2層","EdensVerse03"=>"希望の園エデン：共鳴編3層","EdensVerse04"=>"希望の園エデン：共鳴編4層","EdensGate01"=>"希望の園エデン：覚醒編1層","EdensGate02"=>"希望の園エデン：覚醒編2層","EdensGate03"=>"希望の園エデン：覚醒編3層","EdensGate04"=>"希望の園エデン：覚醒編4層","Alphascape01"=>"次元の狭間オメガ：アルファ編1層","Alphascape02"=>"次元の狭間オメガ：アルファ編2層","Alphascape03"=>"次元の狭間オメガ：アルファ編3層","Alphascape04"=>"次元の狭間オメガ：アルファ編4層前半","Alphascape05"=>"次元の狭間オメガ：アルファ編4層後半","Alphascape06"=>"次元の狭間オメガ：アルファ編4層前後半","Sigmascape01"=>"次元の狭間オメガ：シグマ編1層","Sigmascape02"=>"次元の狭間オメガ：シグマ編2層","Sigmascape03"=>"次元の狭間オメガ：シグマ編3層","Sigmascape04"=>"次元の狭間オメガ：シグマ編4層前半","Sigmascape05"=>"次元の狭間オメガ：シグマ編4層後半","Sigmascape06"=>"次元の狭間オメガ：シグマ編4層前後半","Deltascape01"=>"次元の狭間オメガ：デルタ編1層","Deltascape02"=>"次元の狭間オメガ：デルタ編2層","Deltascape03"=>"次元の狭間オメガ：デルタ編3層","Deltascape04"=>"次元の狭間オメガ：デルタ編4層前半","Deltascape05"=>"次元の狭間オメガ：デルタ編4層後半","Deltascape06"=>"次元の狭間オメガ：デルタ編4層前後半","TheSouloftheCreator01"=>"機工城アレキサンダー：天動編1層","TheSouloftheCreator02"=>"機工城アレキサンダー：天動編2層","TheSouloftheCreator03"=>"機工城アレキサンダー：天動編3層","TheSouloftheCreator04"=>"機工城アレキサンダー：天動編4層","TheBurdenoftheSon01"=>"機工城アレキサンダー：律動編1層","TheBurdenoftheSon02"=>"機工城アレキサンダー：律動編2層","TheBurdenoftheSon03"=>"機工城アレキサンダー：律動編3層","TheBurdenoftheSon04"=>"機工城アレキサンダー：律動編4層","TheFistoftheFather01"=>"機工城アレキサンダー：起動編1層","TheFistoftheFather02"=>"機工城アレキサンダー：起動編2層","TheFistoftheFather03"=>"機工城アレキサンダー：起動編3層","TheFistoftheFather04"=>"機工城アレキサンダー：起動編4層","TheFinalCoilofBahamut01"=>"大迷宮バハムート：真成編1層","TheFinalCoilofBahamut02"=>"大迷宮バハムート：真成編2層","TheFinalCoilofBahamut03"=>"大迷宮バハムート：真成編3層","TheFinalCoilofBahamut04"=>"大迷宮バハムート：真成編4層","TheSecondCoilofBahamut01"=>"大迷宮バハムート：侵攻編1層","TheSecondCoilofBahamut02"=>"大迷宮バハムート：侵攻編2層","TheSecondCoilofBahamut03"=>"大迷宮バハムート：侵攻編3層","TheSecondCoilofBahamut04"=>"大迷宮バハムート：侵攻編4層","TheBindingCoilofBahamut01"=>"大迷宮バハムート：邂逅編1層","TheBindingCoilofBahamut02"=>"大迷宮バハムート：邂逅編2層","TheBindingCoilofBahamut03"=>"大迷宮バハムート：邂逅編3層","TheBindingCoilofBahamut04"=>"大迷宮バハムート：邂逅編4層"];


        //お気に入りのコンテンツの配列を抽出
        foreach($contentsDatas as $contentsData){
            if(in_array($contentsData, $contents_datas_pro)) {
                array_push($contents_datas,$contentsData); 
            }
        }

        $searchdata_sort = array();

        //コンテンツ別でデータを整理
        foreach($contents_datas as $contents_data){
            $searchdata_sort_pro = array();            
            foreach($searchdatas as $searchdata){
                if($searchdata["contents"] == $contents_data){                    
                    array_push($searchdata_sort_pro,$searchdata);
                }
            }
            array_push($searchdata_sort,$searchdata_sort_pro);
        }

        $contents_datas_jp = array();

        //コンテンツ別でデータを整理
        foreach($contents_datas as $contents_data){
            array_push($contents_datas_jp,$contentsDatas_jp[$contents_data]);
        }

        

        //最終データのまとめ
        $all_datas = array();
        $all_datas += array("searchdatas"=>$searchdata_sort);
        $all_datas += array("contentsDatas"=>$contents_datas_jp);
        
        dump($all_datas);        


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

    //
    public function redirect()
    {
        return redirect('/moviesearch/');
    }


}
