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
    <script src="/js/moviesearch/favorite.js"></script>

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

                    <a href="/moviesearch/favorite/">
                        <div id="favoritelist">★お気に入り★</div>
                    </a>

                    






                </div>


                <!-- センター　-->
                <div class="mainContents_container_center">

                    

                     <!-- 動画リスト部分　-->
                     <div class="movie_list">
                        @foreach ($all_datas["searchdatas"] as $index => $searchdata)
    
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