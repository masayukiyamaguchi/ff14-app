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
                        <li data-cpmtemts="EdensPromise01">暗闇の雲</li>
                        <li data-cpmtemts="EdensPromise02">影の王</li>
                        <li data-cpmtemts="EdensPromise03">フェイトブレイカー</li>
                        <li data-cpmtemts="EdensPromise04">プロミス・オブ・エデン</li>
                        <li data-cpmtemts="EdensPromise05">闇の巫女</li>
                    </ul>
                    
                    <p class="left_menu_h2 shadowbringers"> <span class="left_menu_h2_span">希望の園エデン：共鳴編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="EdensVerse01">ラムウ</li>
                        <li data-cpmtemts="EdensVerse02">イフリート ガルーダ</li>
                        <li data-cpmtemts="EdensVerse03">ダークアイドル</li>
                        <li data-cpmtemts="EdensVerse04">シヴァ</li>
                    </ul>

                    <p class="left_menu_h2 shadowbringers"> <span class="left_menu_h2_span">希望の園エデン：覚醒編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="EdensGate01">エデン・プライム</li>
                        <li data-cpmtemts="EdensGate02">ヴォイドウォーカー</li>
                        <li data-cpmtemts="EdensGate03">リヴァイアサン</li>
                        <li data-cpmtemts="EdensGate04">タイタン</li>
                    </ul>
                    </div>

                    <div id="stormblood">
                    <p class="left_menu_h1"><img src="\images\moviesearch\stormblood.png" alt=""></p>
                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：アルファ編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="Alphascape01">カオス</li>
                        <li data-cpmtemts="Alphascape02">ミドガルズオルム</li>
                        <li data-cpmtemts="Alphascape03">オメガ</li>
                        <li data-cpmtemts="Alphascape04">オメガM オメガF</li>
                        <li data-cpmtemts="Alphascape05">オメガ</li>
                    </ul>
                    
                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：シグマ編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="Sigmascape01">魔列車</li>
                        <li data-cpmtemts="Sigmascape02">チャダルヌーク</li>
                        <li data-cpmtemts="Sigmascape03">ガーディアン</li>
                        <li data-cpmtemts="Sigmascape04">ケフカ</li>
                        <li data-cpmtemts="Sigmascape05">ゴッド・ケフカ</li>
                    </ul>

                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：デルタ編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="Deltascape01">アルテ・ロイテ</li>
                        <li data-cpmtemts="Deltascape02">カタストロフィー</li>
                        <li data-cpmtemts="Deltascape03">ハリカルナッソス</li>
                        <li data-cpmtemts="Deltascape04">エクスデス</li>
                        <li data-cpmtemts="Deltascape05">ネオ・エクスデス</li>
                    </ul>
                    </div>

                    <div id="heavensward">
                    <p class="left_menu_h1"><img src="\images\moviesearch\heavensward.png" alt=""></p>
                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：天動編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="TheSouloftheCreator01">リファビッシャー</li>
                        <li data-cpmtemts="TheSouloftheCreator02">傭兵のレイムブリクス</li>
                        <li data-cpmtemts="TheSouloftheCreator03">クルーズチェイサー</li>
                        <li data-cpmtemts="TheSouloftheCreator04">アレキサンダー・プライム</li>
                    </ul>
                    
                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：律動編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="TheBurdenoftheSon01">奇才のラットフィンクス</li>
                        <li data-cpmtemts="TheBurdenoftheSon02">4体</li>
                        <li data-cpmtemts="TheBurdenoftheSon03">万能のクイックシンクス</li>
                        <li data-cpmtemts="TheBurdenoftheSon04">ブルートジャスティス</li>
                    </ul>

                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：起動編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="TheFistoftheFather01">オプレッサー</li>
                        <li data-cpmtemts="TheFistoftheFather02">機工兵団</li>
                        <li data-cpmtemts="TheFistoftheFather03">リビングリキッド</li>
                        <li data-cpmtemts="TheFistoftheFather04">マニピュレーター</li>
                    </ul>
                    </div>


                    <div id="arealmreborn">
                    <p class="left_menu_h1"><img src="\images\moviesearch\arealmreborn.png" alt=""></p>
                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：真成編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="TheFinalCoilofBahamut01">イムドゥグド</li>
                        <li data-cpmtemts="TheFinalCoilofBahamut02">カーリア</li>
                        <li data-cpmtemts="TheFinalCoilofBahamut03">フェニックス</li>
                        <li data-cpmtemts="TheFinalCoilofBahamut04">バハムート・プライム</li>
                    </ul>
                    
                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：侵攻編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="TheSecondCoilofBahamut01">ラフレシア</li>
                        <li data-cpmtemts="TheSecondCoilofBahamut02">メリュジーヌ</li>
                        <li data-cpmtemts="TheSecondCoilofBahamut03">アバター</li>
                        <li data-cpmtemts="TheSecondCoilofBahamut04">ネール・デウス・ダーナス</li>
                    </ul>

                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：邂逅編</span> </p>
                    <ul class="left_menu_ul">
                        <li data-cpmtemts="TheBindingCoilofBahamut01">カドゥケウス</li>
                        <li data-cpmtemts="TheBindingCoilofBahamut02">防疫システム</li>
                        <li data-cpmtemts="TheBindingCoilofBahamut03">雑魚戦</li>
                        <li data-cpmtemts="TheBindingCoilofBahamut04">ツインタニア</li>
                    </ul>
                    </div>






                </div>


                <!-- センター　-->
                <div class="mainContents_container_center">

                    <div class="movie_list_filter">
                        <ul class="movie_list_filter_ul">
                            <li>button</li>
                            <li>button</li>
                            <li>button</li>
                            <li>button</li>
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