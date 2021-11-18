<!DOCTYPE html>
<html lang="jp">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/moviesearch/top.css">
    <link rel="stylesheet" href="/css/mainTopHeader.css">
    <link rel="stylesheet" href="/css/mainTopFooter.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/moviesearch/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <title>FF14-APP|FinalFantasyXIVのアプリサイト</title>

</head>

<body id="body">

    <!--共通ヘッダー-->
    @component('components.commonHeaderMenu')
    @endcomponent

    <div id="mainContents">
        <div class="backgroundimage">
            <div class="mainContents_container">
                
                <!-- レフト　-->
                <div class="mainContents_container_left">

                    <div id="shadowbringers">
                    <p class="left_menu_h1"><img src="\images\moviesearch\shadowbringers.png" alt=""></p>
                    <p class="left_menu_h2 shadowbringers"> <span class="left_menu_h2_span">希望の園エデン：再生編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="EdensPromise01">暗闇の雲</li>
                        <li data-contents="EdensPromise02">影の王</li>
                        <li data-contents="EdensPromise03">フェイトブレイカー</li>
                        <li data-contents="EdensPromise04">プロミス・オブ・エデン</li>
                        <li data-contents="EdensPromise05">闇の巫女</li>
                    </ul>
                    
                    <p class="left_menu_h2 shadowbringers"> <span class="left_menu_h2_span">希望の園エデン：共鳴編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="EdensVerse01">ラムウ</li>
                        <li data-contents="EdensVerse02">イフリート ガルーダ</li>
                        <li data-contents="EdensVerse03">ダークアイドル</li>
                        <li data-contents="EdensVerse04">シヴァ</li>
                    </ul>

                    <p class="left_menu_h2 shadowbringers"> <span class="left_menu_h2_span">希望の園エデン：覚醒編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="EdensGate01">エデン・プライム</li>
                        <li data-contents="EdensGate02">ヴォイドウォーカー</li>
                        <li data-contents="EdensGate03">リヴァイアサン</li>
                        <li data-contents="EdensGate04">タイタン</li>
                    </ul>
                    </div>

                    <div id="stormblood">
                    <p class="left_menu_h1"><img src="\images\moviesearch\stormblood.png" alt=""></p>
                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：アルファ編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="Alphascape01">カオス</li>
                        <li data-contents="Alphascape02">ミドガルズオルム</li>
                        <li data-contents="Alphascape03">オメガ</li>
                        <li data-contents="Alphascape04">オメガM オメガF</li>
                        <li data-contents="Alphascape05">オメガ</li>
                    </ul>
                    
                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：シグマ編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="Sigmascape01">魔列車</li>
                        <li data-contents="Sigmascape02">チャダルヌーク</li>
                        <li data-contents="Sigmascape03">ガーディアン</li>
                        <li data-contents="Sigmascape04">ケフカ</li>
                        <li data-contents="Sigmascape05">ゴッド・ケフカ</li>
                    </ul>

                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：デルタ編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="Deltascape01">アルテ・ロイテ</li>
                        <li data-contents="Deltascape02">カタストロフィー</li>
                        <li data-contents="Deltascape03">ハリカルナッソス</li>
                        <li data-contents="Deltascape04">エクスデス</li>
                        <li data-contents="Deltascape05">ネオ・エクスデス</li>
                    </ul>
                    </div>

                    <div id="heavensward">
                    <p class="left_menu_h1"><img src="\images\moviesearch\heavensward.png" alt=""></p>
                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：天動編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="TheSouloftheCreator01">リファビッシャー</li>
                        <li data-contents="TheSouloftheCreator02">傭兵のレイムブリクス</li>
                        <li data-contents="TheSouloftheCreator03">クルーズチェイサー</li>
                        <li data-contents="TheSouloftheCreator04">アレキサンダー・プライム</li>
                    </ul>
                    
                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：律動編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="TheBurdenoftheSon01">奇才のラットフィンクス</li>
                        <li data-contents="TheBurdenoftheSon02">4体</li>
                        <li data-contents="TheBurdenoftheSon03">万能のクイックシンクス</li>
                        <li data-contents="TheBurdenoftheSon04">ブルートジャスティス</li>
                    </ul>

                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：起動編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="TheFistoftheFather01">オプレッサー</li>
                        <li data-contents="TheFistoftheFather02">機工兵団</li>
                        <li data-contents="TheFistoftheFather03">リビングリキッド</li>
                        <li data-contents="TheFistoftheFather04">マニピュレーター</li>
                    </ul>
                    </div>


                    <div id="arealmreborn">
                    <p class="left_menu_h1"><img src="\images\moviesearch\arealmreborn.png" alt=""></p>
                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：真成編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="TheFinalCoilofBahamut01">イムドゥグド</li>
                        <li data-contents="TheFinalCoilofBahamut02">カーリア</li>
                        <li data-contents="TheFinalCoilofBahamut03">フェニックス</li>
                        <li data-contents="TheFinalCoilofBahamut04">バハムート・プライム</li>
                    </ul>
                    
                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：侵攻編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="TheSecondCoilofBahamut01">ラフレシア</li>
                        <li data-contents="TheSecondCoilofBahamut02">メリュジーヌ</li>
                        <li data-contents="TheSecondCoilofBahamut03">アバター</li>
                        <li data-contents="TheSecondCoilofBahamut04">ネール・デウス・ダーナス</li>
                    </ul>

                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：邂逅編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-contents="TheBindingCoilofBahamut01">カドゥケウス</li>
                        <li data-contents="TheBindingCoilofBahamut02">防疫システム</li>
                        <li data-contents="TheBindingCoilofBahamut03">雑魚戦</li>
                        <li data-contents="TheBindingCoilofBahamut04">ツインタニア</li>
                    </ul>
                    </div>






                </div>


                <!-- センター　-->
                <div class="mainContents_container_center">

                    <div class="movie_list_filter">
                        <ul class="movie_list_filter_ul">   
                            <div class="movie_list_filter_ul_div filter_div">
                                <li class="movie_list_filter_icon"><img src="\images\moviesearch\filtericonimage.png" alt=""></li>
                                <li class="movie_list_filter_button"  id="filter_play_job">ジョブ:ALL</li>
                                
                                <!-- ジョブ　-->
                                <div class="filter_play_job_menu">
                                    <div class="filter_play_job_menu_div">
                                        <div class="filter_play_job_menu_div_top">
                                            <div class="filter_play_job_menu_div_tank">
                                                <div class="filter_play_job_menu_div_titletank">                                                    
                                                    タンク
                                                </div>
                                                <div class="filter_play_job_menu_div_icontank">
                                                    <ul>
                                                        <li data-stat="on" data-job="paladin" class="play_job_icon"><img src="\images\moviesearch\paladin.png" alt=""></li>
                                                        <li data-stat="on" data-job="warrior" class="play_job_icon"><img src="\images\moviesearch\warrior.png" alt=""></li>
                                                        <li data-stat="on" data-job="darkknight" class="play_job_icon"><img src="\images\moviesearch\darkknight.png" alt=""></li>
                                                        <li data-stat="on" data-job="gunbreaker" class="play_job_icon"><img src="\images\moviesearch\gunbreaker.png" alt=""></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <div  class="filter_play_job_menu_div_healer">
                                                <div class="filter_play_job_menu_div_titlehealer">
                                                    ヒーラー
                                                </div>
                                                <div class="filter_play_job_menu_div_iconhealer">
                                                    <ul>
                                                        <li data-stat="on" data-job="whitemage" class="play_job_icon"><img src="\images\moviesearch\whitemage.png" alt=""></li>
                                                        <li data-stat="on" data-job="scholar" class="play_job_icon"><img src="\images\moviesearch\scholar.png" alt=""></li>
                                                        <li data-stat="on" data-job="astrologian" class="play_job_icon"><img src="\images\moviesearch\astrologian.png" alt=""></li>
                                                        <li data-stat="on" data-job="sage" class="play_job_icon"><img src="\images\moviesearch\sage.png" alt=""></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="filter_play_job_menu_div_middle">
                                            <div class="filter_play_job_menu_div_titledps">
                                                アタッカー
                                            </div>
                                            <div class="filter_play_job_menu_div_dps">

                                                <div class="filter_play_job_menu_div_melee">
                                                    <div class="filter_play_job_menu_div_titlemelee">
                                                        近接DPS
                                                    </div>
                                                    <div class="filter_play_job_menu_div_iconmelee">
                                                        <ul>
                                                            <li data-stat="on" data-job="dragoon" class="play_job_icon"><img src="\images\moviesearch\dragoon.png" alt=""></li>
                                                            <li data-stat="on" data-job="monk" class="play_job_icon"><img src="\images\moviesearch\monk.png" alt=""></li>
                                                            <li data-stat="on" data-job="ninja" class="play_job_icon"><img src="\images\moviesearch\ninja.png" alt=""></li>
                                                            <li data-stat="on" data-job="samurai" class="play_job_icon"><img src="\images\moviesearch\samurai.png" alt=""></li>
                                                            <li data-stat="on" data-job="reaper" class="play_job_icon"><img src="\images\moviesearch\reaper.png" alt=""></li>
                                                        </ul>
                                                    </div>
                                                </div>  

                                                <div class="filter_play_job_menu_div_range">
                                                    <div class="filter_play_job_menu_div_titlerange">
                                                        レンジ
                                                    </div>
                                                    <div class="filter_play_job_menu_div_iconrange">
                                                        <ul>
                                                            <li data-stat="on" data-job="bard" class="play_job_icon"><img src="\images\moviesearch\bard.png" alt=""></li>
                                                            <li data-stat="on" data-job="machinist" class="play_job_icon"><img src="\images\moviesearch\machinist.png" alt=""></li>
                                                            <li data-stat="on" data-job="dancer" class="play_job_icon"><img src="\images\moviesearch\dancer.png" alt=""></li>
                                                        </ul>
                                                    </div>
                                                </div>                                               
                                            </div>

                                            <div class="filter_play_job_menu_div_bottom">
                                                <div class="filter_play_job_menu_div_dps">
                                                    <div class="filter_play_job_menu_div_caster">
                                                        <div class="filter_play_job_menu_div_titlecaster">
                                                            キャスター
                                                        </div>
                                                        <div class="filter_play_job_menu_div_iconcaster">
                                                            <ul>
                                                                <li data-stat="on" data-job="blackmage" class="play_job_icon"><img src="\images\moviesearch\blackmage.png" alt=""></li>
                                                                <li data-stat="on" data-job="summoner" class="play_job_icon"><img src="\images\moviesearch\summoner.png" alt=""></li>
                                                                <li data-stat="on" data-job="redmage" class="play_job_icon"><img src="\images\moviesearch\redmage.png" alt=""></li>
                                                                <li data-stat="on" data-job="bluemage" class="play_job_icon"><img src="\images\moviesearch\bluemage.png" alt=""></li>
                                                            </ul>
                                                        </div>
                                                    </div>                              
                                                </div>

                                                <div class="filter_play_job_menu_all_button">
                                                    <div class="filter_play_job_menu_all_button_active">
                                                        <div class="filter_play_job_menu_all_button_active_button">全て選択</div>
                                                    </div>
                                                    <div class="filter_play_job_menu_all_button_inactive">
                                                        <div class="filter_play_job_menu_all_button_inactive_button">全て解除</div>
                                                    </div>                                                    
                                                </div>
                                                <div class="filter_play_job_menu_enter">
                                                    <div class="filter_play_job_menu_enter_button">
                                                        <div class="enter_text">決定</div>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <li class="movie_list_filter_button" id="filter_bool_vc">VC:ALL</li>
                                <li class="movie_list_filter_button"  id="filter_string_guide">解説:ALL</li>
                                <div class="filter_string_guide_menu">
                                    <ul>
                                        <li data-value="ALL">ALL</li>
                                        <li data-value="ゆっくり">　ゆっくり</li>
                                        <li data-value="本人">　本人解説</li>
                                        <li data-value="字幕">　字幕のみ</li>
                                        <li data-value="なし">　解説なし</li>
                                    </ul>
                                </div>
                                <li class="movie_list_filter_button"  id="filter_bool_act">DPS表示:ALL</li>
                                <li class="movie_list_filter_button"  id="filter_bool_clear">クリアー:ALL</li>
                                <li class="movie_list_filter_button"  id="filter_language">言語:ALL</li>
                                <li class="movie_list_filter_button"  id="filter_delete">×</li>
                            </div>
                            <div class="movie_list_filter_ul_div sort_div">
                                <li class="movie_list_filter_icon"><img src="\images\moviesearch\sorticonimage.png" alt=""></li>
                                <li class="movie_list_filter_button"  id="sort_view_count">再生回数：多い</li>
                                <li class="movie_list_filter_button"  id="sort_published_at">投稿日</li>
                            </div>
                        </ul>
                    </div>

                    <!-- 動画リスト部分　-->
                    <div class="movie_list">                    
                    @foreach ($searchdatas as $index => $searchdata)

                    @if ($index%4 == 0)
                        <ul class="movie_list_ul">                     
                    @endif                        
                        <div class="movie_list_div">
                            <li>
                                <div class="movie_list_samneil">
                                    <a href="/moviesearch/{{ $searchdata["movie_id"] }}/">
                                        <img src="{{ $searchdata["samneil_img"] }}" alt="{{ $searchdata["movie_title"] }}">
                                    </a>
                                </div>
                                <div class="movie_list_detail">
                                    <div class="movie_list_detail_channelicon">
                                        <img src="{{ $searchdata["channel_img"] }}" alt="{{ $searchdata["channel_name"] }}">
                                    </div>
                                    <div class="movie_list_detail_text">                                        
                                        <div class="movie_list_detail_text_title">
                                            <a href="/moviesearch/{{ $searchdata["movie_id"] }}/">
                                                {{ $searchdata["movie_title"] }}
                                            </a>
                                        </div>
                                        <div class="movie_list_detail_text_channelname">
                                            {{ $searchdata["channel_name"] }}
                                        </div>
                                        <div class="movie_list_detail_view_count">
                                            {{ $searchdata["view_count_str"] }}・{{ $searchdata["published_at_str"] }}
                                        </div>
                                    </div>
                                </div>                            
                            </li>
                        </div>

                    @if ($index%4 == 3)
                        </ul>
                    @endif

                                   
                    @endforeach
                    </div>




            </div>
        </div>
    </div>

    
    

    <!--共通フッター-->
    @component('components.commonFooterMenu')
    @endcomponent
    

</body>
</html>