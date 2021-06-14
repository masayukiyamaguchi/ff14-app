<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FF14キャラクターカード</title>
    <link rel="stylesheet" href="/css/main.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- <script src="{{asset('/js/coffee_cookie.js') }}"></script> -->

</head>
<body>

<!-- ヘッダー -->
<div class="header_div">
    <div class="title_div">
        <span class="title_span">FF14キャラクターカード</span>
    </div>
</div>

<!-- メイン部分 -->
<div class="main_div">

    <!-- レフトメニュー -->
    <div class="left_menu">
        <p></p>
    </div>


<div class="contents">
    <div class="ccard_div">              
        <img class="ccard_preview" src="{{$save_dir}}" alt="">
        <img class="white_cambas" src="/img/white_cambas.png" alt="">
        <p class="char_name">{{$char_name}}</p>
        <p class="char_server">{{$char_server}}</p>
        <p class="char_world">{{$char_world}}</p>
        <p class="char_race">{{$char_race}}</p>
        <p class="char_tribe">{{$char_tribe}}</p>
        <p class="char_gender">{{$char_gender}}</p>
        <p class="char_freecompany">{{$char_freecompany}}</p>
        
    </div>


    <div class="create_text_div">
        <button id="$create_text">test</button>
    </div>




</div>
<!-- コンテンツココまで -->


<!-- ライトメニュー -->
    <div class="rigth_menu">
        <p></p>
    </div>


</div>
<!-- maindivここまで -->



<!-- フッター -->
<div class="footer">
      ここにはフッターメニューが入ります
</div>
 


</body>
</html>