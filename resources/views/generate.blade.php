<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>FF14キャラクターカード</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/tab.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/sunny/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/tab.js"></script>
    <script src="/js/imageview.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/material-design-inspired-color-picker@1.7.2/dist/md-color-picker.min.js"></script> 
    <!-- <script src="{{asset('/js/coffee_cookie.js') }}"></script> -->

</head>
<body>
<div id="dragArea">

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
    <div id=camvas>
        <span id="js-getVariable" data-name={{$save_dir}}></span>
        <canvas id="myCanvas"  width="960" height="540"></canvas>
        <!-- <img class="ccard_preview" src="{{$save_dir}}" alt=""> -->
        <div class="white_cambas"></div>
        <!-- <img class="white_cambas" src="/img/white_cambas.png" alt=""> -->

        
        <!-- キャラ名 -->
        <span class="char_name dragg">{{$char_name}}</span>        

        <!-- メインジョブ -->
        <div class="char_main_job_span dragg">
            <span class="char_main_job char_info">メインジョブ</span>
            <span class="char_main_job_icon"><img src="img\jobicon\mainjob\paladin.png" alt=""></span>
            <span class="char_main_name char_info">ナイト</span>
        </div>

        <!-- サーバー -->
        <div class="char_server_span dragg">
            <span class="char_server char_info">サーバー</span>
            <span class="char_server_name char_info">{{$char_server}}({{$char_world}})</span>
        </div>

        <!-- 種族 -->
        <div class="char_race_span dragg">
            <span class="char_race char_info">種族</span>
            <span class="char_race_name char_info">{{$char_race}}<span class="char_gender">{{$char_gender}}</span></span>
            <span class="char_tribe_name char_info">({{$char_tribe}})</span>
        </div>

        <!-- フリーカンパニー -->
        <div class="char_freecompany_span dragg">
            <span class="char_freecompany char_info">フリーカンパニー</span>
            <span class="char_freecompany_name char_info">{{$char_freecompany}}</span>
        </div>


        <!-- 好きなこと --> 
        <div class="char_favorite_span dragg">       
        <div class="char_favorite_div">
            <span class="char_favorite char_info">お気に入りコンテンツ</span>
            <span class="char_favorite_name">
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">レベリング・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">クラフター・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">ギャザラー・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">SS・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">ミラプリ・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">チャット・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">ハウジング・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">ゴールドソーサー・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">麻雀・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">演奏・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">地図・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">討伐・討滅戦・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">零式・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">絶・</span>
                <span class="char_info"><img src="img\faveriteicon\sample01.png" alt="">PvP・</span>
            </span>
        </div>
        </div>
        
        <!-- 保存ボタン -->
        <button id="camvas_button">保存</button>
        <a id="download" href="">ダウンロード</a>

       
        <!-- ジョブアイコン -->
        <div class="char_job_icon_span dragg">  
        <div class="char_job_icon_div">
            @foreach($job_levels as $job_level)
                <img class="job_icon_img_{{$job_level['icn']}}" src="/img/jobicon/01/{{$job_level['icn']}}.png" alt="">
            @endforeach

            @foreach($job_levels as $job_level)
                <span class="job_level_{{$job_level['icn']}}">{{$job_level['level']}}</span>            
            @endforeach
        </div>
        </div>

        <!-- アチーブメント -->
        <div>
            
            
        </div>

        <div class="achievements_div">
            <span  class="achievements_title achievements_span">-Achievements-</span>
        @foreach($char_achievements as $char_achievement)
            <span class="achievements_span">{{$char_achievement["title"]}}<img src="img\achievements\{{$char_achievement['ID']}}.png" alt=""></span>
        @endforeach
        </div>
            
        
    </div>
    </div>




</div>
<!-- コンテンツココまで -->


<!-- ライトメニュー -->
<div class="rigth_menu">

<div id='container'>    
<!-- キャラ名 -->
<div class='widget'>
  <div id='キャラ名' class="tab-content">    
    <!-- フォント変更 -->
    <p>フォント</p>
    <span class="char_name_font_span">
        <p class="char_name_font_p">
            <input type="radio" name="char_name_radio" value="Alice"><span class="Alice">Alice</span>
            <input type="radio" name="char_name_radio" value="Bungee"><span class="Bungee">Bungee</span>
            <input type="radio" name="char_name_radio" value="Elsie"><span class="Elsie">Elsie</span>
            <input type="radio" name="char_name_radio" value="IMFell"><span class="IMFell">IMFell</span>
            <input type="radio" name="char_name_radio" value="Kalam"><span class="Kalam">Kalam</span>
        </p>
        <p class="char_name_font_p">
            <input type="radio" name="char_name_radio" value="Leckerli"><span class="Leckerli">Leckerli</span>
            <input type="radio" name="char_name_radio" value="Metamorphous"><span class="Metamorphous">Metamo</span>
            <input type="radio" name="char_name_radio" value="Noto"><span class="Noto">Noto</span>
            <input type="radio" name="char_name_radio" value="Nunito"><span class="Nunito">Nunito</span>
            <input type="radio" name="char_name_radio" value="Righteous"><span class="Righteous">Right</span>
        </p>
        <p class="char_name_font_p">
            <input type="radio" name="char_name_radio" value="Rock"><span class="Rock">Rock</span>
            <input type="radio" name="char_name_radio" value="Sacramento"><span class="Sacramento">Sacrame</span>
            <input type="radio" name="char_name_radio" value="Sorts"><span class="Sorts">Sorts</span>
        </p>
    </span>

    <!-- 大きさ変更 -->
    <p>大きさ:<span id="wkValue"></span></p>
    <span class="char_name_fontsize_span">
        <div id="wkSlider2"></div>
        
    </span>


    <!-- 色変更 -->
    <p>色:<span id="colorPicker_color"></span></p>
    <span class="char_name_fontsize_span">
    <md-color-picker id="colorPicker" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
    </span>


    <!-- 透明度変更 -->
    <p>透明度:<span id="transparent_value"></span></p>
    <span class="char_name_transparent_value_span">
        <div id="transparent_value2"></div>
    </span>

    <br><br><br><br>

</div>
</div>


<div class='widget'>
  <div id='キャラ情報' class="tab-content">

  <!-- メインジョブ -->
  

  <!-- 文字情報 -->
  <p>フォント</p>
    <span class="char_info_font_span">
        <p class="char_info_font_p">
            <input type="radio" name="char_info_radio" value="Alice"><span class="Alice">Alice</span>
            <input type="radio" name="char_info_radio" value="Bungee"><span class="Bungee">Bungee</span>
            <input type="radio" name="char_info_radio" value="Elsie"><span class="Elsie">Elsie</span>
            <input type="radio" name="char_info_radio" value="IMFell"><span class="IMFell">IMFell</span>
            <input type="radio" name="char_info_radio" value="Kalam"><span class="Kalam">Kalam</span>
        </p>
        <p class="char_name_font_p">
            <input type="radio" name="char_info_radio" value="Leckerli"><span class="Leckerli">Leckerli</span>
            <input type="radio" name="char_info_radio" value="Metamorphous"><span class="Metamorphous">Metamo</span>
            <input type="radio" name="char_info_radio" value="Noto"><span class="Noto">Noto</span>
            <input type="radio" name="char_info_radio" value="Nunito"><span class="Nunito">Nunito</span>
            <input type="radio" name="char_info_radio" value="Righteous"><span class="Righteous">Right</span>
        </p>
        <p class="char_name_font_p">
            <input type="radio" name="char_info_radio" value="Rock"><span class="Rock">Rock</span>
            <input type="radio" name="char_info_radio" value="Sacramento"><span class="Sacramento">Sacrame</span>
            <input type="radio" name="char_info_radio" value="Sorts"><span class="Sorts">Sorts</span>
        </p>
    </span>
    
  <p>見出し</p>
  <p>色:<span id="char_info_h_span"></span></p>
　<span class="char_info_h_span">
　  <md-color-picker id="char_info_h" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
　</span>

　<p>テキスト</p>
  <p>色:<span id="char_text_h_span"></span></p>
　<span class="char_text_h_span">
　  <md-color-picker id="char_text_h" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
　</span>



  </div>
</div>




<div class='widget'>
  <div id='evening' class="tab-content">
  <p>test3</p>
  </div>
</div>

<div class='widget'>
  <div id='weekend' class="tab-content">
  <p>test4</p>
  </div>
</div>

</div>
<!-- End of container -->
   


</div>


</div>
<!-- maindivここまで -->



<!-- フッター -->
<div class="footer">











</div>
<!-- フッターココまで -->







</div>
</body>
</html>