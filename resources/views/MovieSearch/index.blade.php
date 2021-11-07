<!DOCTYPE html>
<html lang="jp">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/moviesearch/top.css">
    <link rel="stylesheet" href="/css/mainTopHeader.css">
    <link rel="stylesheet" href="/css/mainTopFooter.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/moviesearch/main.js"></script>



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
                    <p class="left_menu_h1"><img src="\images\moviesearch\shadowbringers.png" alt=""></p>
                    <p class="left_menu_h2"> <span class="left_menu_h2_span">希望の園エデン：再生編</span> </p>
                    <ul class="left_menu_ul">
                        <li>暗闇の雲</li>
                        <li>影の王</li>
                        <li>フェイトブレイカー</li>
                        <li>プロミス・オブ・エデン</li>
                        <li>闇の巫女</li>
                    </ul>
                    
                    <p class="left_menu_h2"> <span class="left_menu_h2_span">希望の園エデン：共鳴編</span> </p>
                    <ul class="left_menu_ul">
                        <li>ラムウ</li>
                        <li>イフリート＆ガルーダ</li>
                        <li>ダークアイドル</li>
                        <li>シヴァ</li>
                    </ul>

                    <p class="left_menu_h2"> <span class="left_menu_h2_span">希望の園エデン：覚醒編</span> </p>
                    <ul class="left_menu_ul">
                        <li>エデン・プライム</li>
                        <li>ヴォイドウォーカー</li>
                        <li>リヴァイアサン</li>
                        <li>タイタン</li>
                    </ul>
                    

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
                    <ul class="movie_list_ul">

                        <li>
                            <iframe width="360" height="200" src="https://www.youtube.com/embed/zknxNR97IdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p class="movie_list_p">
                                <span class="movie_list_icon">〇</span>
                                <span class="movie_list_titole">title</span>
                            </p>
                            <p class="movie_list_p movie_list_comment">comment</p>
                        </li>

                        <li><iframe width="360" height="200" src="https://www.youtube.com/embed/zknxNR97IdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                        <li><iframe width="360" height="200" src="https://www.youtube.com/embed/zknxNR97IdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                        <li><iframe width="360" height="200" src="https://www.youtube.com/embed/zknxNR97IdA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                    </ul>

                    <ul class="movie_list_ul">
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li>24</li>
                    </ul>

                    <ul class="movie_list_ul">
                        <li>31</li>
                        <li>32</li>
                        <li>33</li>
                        <li>34</li>
                    </ul>                        

                </div>



            </div>
        </div>
    </div>

    <!--共通フッター-->
    @component('components.commonFooterMenu')
    @endcomponent
    

</body>
</html>