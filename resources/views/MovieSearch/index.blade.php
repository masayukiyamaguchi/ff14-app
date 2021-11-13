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
                        <li>ラムウ</li>
                        <li>イフリート ガルーダ</li>
                        <li>ダークアイドル</li>
                        <li>シヴァ</li>
                    </ul>

                    <p class="left_menu_h2 shadowbringers"> <span class="left_menu_h2_span">希望の園エデン：覚醒編</span> </p>
                    <ul class="left_menu_ul">
                        <li>エデン・プライム</li>
                        <li>ヴォイドウォーカー</li>
                        <li>リヴァイアサン</li>
                        <li>タイタン</li>
                    </ul>
                    </div>

                    <div id="stormblood">
                    <p class="left_menu_h1"><img src="\images\moviesearch\stormblood.png" alt=""></p>
                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：アルファ編</span> </p>
                    <ul class="left_menu_ul">
                        <li>カオス</li>
                        <li>ミドガルズオルム</li>
                        <li>オメガ</li>
                        <li>オメガM オメガF</li>
                        <li>オメガ</li>
                    </ul>
                    
                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：シグマ編</span> </p>
                    <ul class="left_menu_ul">
                        <li>魔列車</li>
                        <li>チャダルヌーク</li>
                        <li>ガーディアン</li>
                        <li>ケフカ</li>
                        <li>ゴッド・ケフカ</li>
                    </ul>

                    <p class="left_menu_h2 stormblood"> <span class="left_menu_h2_span">次元の狭間オメガ：デルタ編</span> </p>
                    <ul class="left_menu_ul">
                        <li>アルテ・ロイテ</li>
                        <li>カタストロフィー</li>
                        <li>ハリカルナッソス</li>
                        <li>エクスデス</li>
                        <li>ネオ・エクスデス</li>
                    </ul>
                    </div>

                    <div id="heavensward">
                    <p class="left_menu_h1"><img src="\images\moviesearch\heavensward.png" alt=""></p>
                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：天動編</span> </p>
                    <ul class="left_menu_ul">
                        <li>リファビッシャー</li>
                        <li>傭兵のレイムブリクス</li>
                        <li>クルーズチェイサー</li>
                        <li>アレキサンダー・プライム</li>
                    </ul>
                    
                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：律動編</span> </p>
                    <ul class="left_menu_ul">
                        <li>奇才のラットフィンクス</li>
                        <li>4体</li>
                        <li>万能のクイックシンクス</li>
                        <li>ブルートジャスティス</li>
                    </ul>

                    <p class="left_menu_h2 heavensward"> <span class="left_menu_h2_span">機工城アレキサンダー：起動編</span> </p>
                    <ul class="left_menu_ul">
                        <li>オプレッサー</li>
                        <li>機工兵団</li>
                        <li>リビングリキッド</li>
                        <li>マニピュレーター</li>
                    </ul>
                    </div>


                    <div id="arealmreborn">
                    <p class="left_menu_h1"><img src="\images\moviesearch\arealmreborn.png" alt=""></p>
                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：真成編</span> </p>
                    <ul class="left_menu_ul">
                        <li>イムドゥグド</li>
                        <li>カーリア</li>
                        <li>フェニックス</li>
                        <li>バハムート・プライム</li>
                    </ul>
                    
                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：侵攻編</span> </p>
                    <ul class="left_menu_ul">
                        <li>ラフレシア</li>
                        <li>メリュジーヌ</li>
                        <li>アバター</li>
                        <li>ネール・デウス・ダーナス</li>
                    </ul>

                    <p class="left_menu_h2 arealmreborn"> <span class="left_menu_h2_span">大迷宮バハムート：邂逅編</span> </p>
                    <ul class="left_menu_ul">
                        <li>カドゥケウス</li>
                        <li>防疫システム</li>
                        <li>雑魚戦</li>
                        <li>ツインタニア</li>
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