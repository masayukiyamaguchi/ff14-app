<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use XIVAPI\XIVAPI;

class Seachdata extends Model
{
    public function searchdata($id){

        // データが取得できなかった場合の処理
        if($data = @file_get_contents("https://xivapi.com/character/".$id)){
            $seach_datas = file_get_contents("https://xivapi.com/character/".$id);
            $seach_datas = json_decode($seach_datas);
        }else{
            $seach_datas = "error";
        }

        return $seach_datas;
    }


    public function searchworld($sever){
        switch($sever){
            case "Adamantoise":
            case "Cactuar":
            case "Faerie":
            case "Gilgamesh":
            case "Jenova":
            case "Midgardsormr":
            case "Sargatanas":
            case "Siren":
                return "Aether";
                break;

            case "Cerberus":
            case "Louisoix":
            case "Moogle":
            case "Omega":
            case "Ragnarok":
            case "Spriggan":
                return "Chaos";
                break;

            case "Balmung":
            case "Brynhildr":
            case "Coeurl":
            case "Diabolos":
            case "Goblin":
            case "Malboro":
            case "Mateus":
            case "Zalera":
                return "Crystal";
                break;

            case "Aegis":
            case "Atomos":
            case "Carbuncle":
            case "Garuda":
            case "Gungnir":
            case "Kujata":
            case "Ramuh":
            case "Tonberry":
            case "Typhon":
            case "Unicorn":
                return "Elemental";
                break;

            case "Alexander":
            case "Bahamut":
            case "Durandal":
            case "Fenrir":
            case "Ifrit":
            case "Ridill":
            case "Tiamat":
            case "Ultima":
            case "Valefor":
            case "Yojimbo":
            case "Zeromus":
                return "Gaia";
                break;

            case "초코보":
            case "모그리":
            case "카벙클":
            case "톤베리":
                return "Korea";
                break;

            case "Lich":
            case "Odin":
            case "Phoenix":
            case "Shiva":
            case "Zodiark":
            case "Twintania":
                return "Light";
                break;

            case "Anima":
            case "Asura":
            case "Belias":
            case "Chocobo":
            case "Hades":
            case "Ixion":
            case "Mandragora":
            case "Masamune":
            case "Pandaemonium":
            case "Shinryu":
            case "Titan":
                return "Mana";
                break;

            case "Behemoth":
            case "Excalibur":
            case "Exodus":
            case "Famfrit":
            case "Hyperion":
            case "Lamia":
            case "Leviathan":
            case "Ultros":
                return "Primal";
                break;

            case "ZiShuiZhanQiao":
            case "YanXia":
            case "JingYuZhuangYuan":
            case "MoDuNa":
            case "HaiMaoChaWu":
            case "RouFengHaiWan":
            case "HuPoYuan":
                return "猫小胖";
                break;

            case "BaiYinXiang":
            case "BaiJinHuanXiang":
            case "ShenQuanHen":
            case "ChaoFengTing":
            case "LvRenZhanQiao":
            case "FuXiaoZhiJian":
            case "Longchaoshendian":
            case "MengYuBaoJing":
                return "莫古力";
                break;

            case "HongYuHai":
            case "ShenYiZhiDi":
            case "LaNuoXiYa":
            case "HuanYingQunDao":
            case "MengYaChi":
            case "YuZhouHeYin":
            case "WoXianXiRan":
            case "ChenXiWangZuo":
                return "陆行鸟";
                break;

        }
    }

    public function searchrace($race){
        
        switch($race){
            case "1":
                return "ヒューラン";
                break;

            case "2":
                return "エレゼン";
                break;            
        
            case "3":
                return "ララフェル";
                break;
                
            case "4":
                return "ミコッテ";
                break;

            case "5":
                return "ルガディン";
                break;

            case "6":
                return "アウラ";
                break;

            case "7":
                return "ロスガル";
                break;

            case "8":
                return "ヴィエラ";
                break;
        }
    }

    public function searchtribe($tribe){
        switch($tribe){
            case "1":
                return "ミッドランダー";
                break;

            case "2":
                return "ハイランダー";
                break;

            case "3":
                return "フォレスター";
                break;

            case "4":
                return "シェーダー";
                break;

            case "5":
                return "プレーンフォーク";
                break;

            case "6":
                return "デューンフォーク";
                break;

            case "7":
                return "サンシーカー";
                break;

            case "8":
                return "ムーンキーパー";
                break;

            case "9":
                return "ゼーヴォルフ";
                break;

            case "10":
                return "ローエンガルデ";
                break;

            case "11":
                return "アウラ・レン";
                break;

            case "12":
                return "アウラ・ゼラ";
                break;

            case "13":
                return "ヘリオン";
                break;

            case "14":
                return "ロスト";
                break;

            case "15":
                return "ラヴァ・ヴィエラ";
                break;

            case "16":
                return "ヴィナ・ヴィエラ";
                break;

        }
    }

    public function searchgender($gender){
        switch($gender){
            case "1":
                return "♂";
                break;
            
            case "2":
                return "♀";
                break;
        }
    }
    
}
