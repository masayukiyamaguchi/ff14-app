<!DOCTYPE html>
<html lang="jp">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/moviesearch/favorite.css">
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

                    <div id="favoritelist">
                        <div class="favoritelist_headerimg">
                            <img src="\images\moviesearch\favoritebutton.png" alt="">
                        </div>

                        <ul class="left_menu_ul">
                            <a href="/moviesearch/favorite/">
                                <li>
                                    <form action="" method="post">
                                        @csrf
                                        <input type="hidden" name="favorite_list" value="">
                                    </form>                            
                                    リスト更新
                                </li>
                            </a>
                            
                            <li>
                                共有URL作成
                            </li>
                           
                        </ul>
                        
                                                
                    </div>

                </div>


                <!-- センター　-->
                <div class="mainContents_container_center">

                    

                     <!-- 動画リスト部分　-->
                     <div class="movie_list">

                        @for($indexfor = 0;$indexfor < count($all_datas["searchdatas"]); $indexfor++)
                            <div class="contents_header">{{$all_datas["contentsDatas"][$indexfor]}}</div>

                            @foreach ($all_datas["searchdatas"][$indexfor] as $index => $searchdata)                               
                            
                            @if ($index%5 == 0)
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
                                                        <div class="movie_list_detail_text_channelname">
                                                            {{ $searchdata["movie_title"] }}
                                                        </div>                                                       
                                                    </a>                                                          
                                                </div>
                                                <div class="movie_list_detail_text_channelname_div">
                                                    <div class="movie_list_detail_text_channelname">
                                                        {{ $searchdata["channel_name"] }}
                                                    </div>
                                                    <div class="movie_list_favorite_div">
                                                        <div data-id="{{ $searchdata["movie_id"] }}" class="movie_list_favorite" style="color: rgb(251, 255, 0);">
                                                            ★
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="movie_list_detail_view_count">
                                                    {{ $searchdata["view_count_str"] }}・{{ $searchdata["published_at_str"] }}
                                                </div>
                                            </div>
                                        </div>                            
                                    </li>
                                </div>
                            
                            @if ($index%5 == 4)
                                </ul>
                            @endif 

                            @endforeach

                            @if ($index%5 < 4)
                                </ul>
                            @endif   
                        
                        
                        @endfor
                    </div>

            </div>
        </div>
    </div>

    
    

    <!--共通フッター-->
    @component('components.commonFooterMenu')
    @endcomponent
    

</body>
</html>