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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="/js/tab.js"></script>
    <script src="/js/main.js"></script>
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
        <canvas id="myCanvas" width="960" height="540"></canvas>
        <!-- <img class="ccard_preview" src="{{$save_dir}}" alt=""> -->
        <div class="white_cambas position dragg resize"></div>
        <!-- <img class="white_cambas" src="/img/white_cambas.png" alt=""> -->


        <!-- キャラ名 -->
        <div class="char_name_div">
            <span class="char_name dragg position first_last_name">{{$char_name}}</span>
            <span class="char_name dragg position first_name display_none">{{$char_first_name}}</span>
            <span class="char_name dragg position last_name display_none">{{$char_last_name}}</span>
        </div>
        <!-- メインジョブ -->
        <div class="char_main_job_span dragg position">
            <span class="char_main_job char_info">メインジョブ</span>
            <span class="char_main_job_icon"><img class="char_main_job_icon_img" src="img\jobicon\mainjob\paladin.png" alt=""></span>
            <span class="char_main_name char_info">ナイト</span>
        </div>

        <!-- サーバー -->
        <div class="char_server_span dragg position">
            <span class="char_server char_info">サーバー</span>
            <span class="char_server_name char_info">{{$char_server}}({{$char_world}})</span>
        </div>

        <!-- 種族 -->
        <div class="char_race_span dragg position">
            <span class="char_race char_info">種族/性別</span>
            <span class="char_race_name char_info">{{$char_race}}<span class="char_gender">{{$char_gender}}</span></span>
            <span class="char_tribe_name char_info">({{$char_tribe}})</span>
        </div>

        <!-- フリーカンパニー -->
        <div class="char_freecompany_span dragg position">
            <span class="char_freecompany char_info">フリーカンパニー</span>
            <span class="char_freecompany_name char_info">{{$char_freecompany}}</span>
        </div>


        <!-- 好きなこと --> 
        <div class="char_favorite_span dragg position">       
        <div class="char_favorite_div">
            <span class="char_favorite char_info">お気に入りコンテンツ</span>
            <span class="char_favorite_name">
                <span name=text001 class="char_info"><img src="img\faveriteicon\faverite001.png" alt="">レベリング・</span>
                <span name=text015 class="char_info"><img src="img\faveriteicon\faverite015.png" alt="">メインストーリー・</span>
                <span name=text002 class="char_info"><img src="img\faveriteicon\faverite002.png" alt="">クラフター・</span>
            </span>
        </div>
        </div>
        
       
        <!-- ジョブアイコン -->
        <div class="char_job_icon_span dragg position">  
        <div class="char_job_icon_div">
            @foreach($job_levels as $job_level)
                <img class="job_icon_img_{{$job_level['icn']}}" value={{$job_level['icn']}} src="/img/jobicon/01/{{$job_level['icn']}}.png" alt="">
            @endforeach

            @foreach($job_levels as $job_level)
                <span class="job_level_{{$job_level['icn']}}">{{$job_level['level']}}</span>            
            @endforeach
        </div>
        </div>

        <!-- コピーライト -->
        <span class="copyright_span_white dragg position">(C) SQUARE ENIX CO., LTD. All Rights Reserved.</span>        
        <span class="copyright_span_black dragg position">(C) SQUARE ENIX CO., LTD. All Rights Reserved.</span>        

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

<div class='widget'>
  <div id='基本' class="tab-content">

<!-- 保存ボタン -->
<button id="camvas_button">保存</button>
<a id="download" href="">ダウンロード</a>

  <!-- 位置 -->
    <p>データ位置</p>
    <input type="radio" name="position_radio" value="left">左寄せ
    <input type="radio" name="position_radio" value="rigth">右寄せ

    <p>データ表示</p>
    <input type="checkbox" name="data_display" value="char_name">キャラ名
    <input type="checkbox" name="data_display" value="char_main_job_span">メインジョブ
    <input type="checkbox" name="data_display" value="char_server_span">サーバー
    <input type="checkbox" name="data_display" value="char_race_span">種族
    <input type="checkbox" name="data_display" value="char_freecompany_span">FC<br>
    <input type="checkbox" name="data_display" value="char_favorite_span">コンテンツ
    <input type="checkbox" name="data_display" value="char_job_icon_span">ジョブレベル<br>
    <input type="checkbox" name="data_display" value="copyright_span_white">コピーライト(白)
    <input type="checkbox" name="data_display" value="copyright_span_black">コピーライト(黒)


    <!-- 色変更 -->
    <p>背景色:
        <span id="colorPicker_color_white"></span>
        <input type="checkbox" name="white_cambas">サイズを変更する
    </p>
    <span class="char_name_fontsize_span_white">
    <md-color-picker id="colorPicker_white" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
    </span>

    <!-- 透明度変更 -->
    <p>背景透明度:<span id="transparent_value_white"></span></p>
    <span class="char_name_transparent_value_span_white">
        <div id="transparent_value2_white"></div>
    </span>
    <span class="slyder_attention">※ゆっくり動かしてね！</span>



  </div>
</div>






<div class='widget'>
  <div id='キャラ名' class="tab-content">    
    <!-- キャラ名 -->
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

    <!-- 名前分割 -->
    <input type="checkbox" name="name_split">キャラ名を分割する


    <br><br><br><br>

</div>
</div>


<div class='widget'>
  <div id='情報' class="tab-content">

  <!-- メインジョブ -->
    <p>メインジョブ</p>
    <div class="main_job_select_div">
        <ul class="main_job_select_ul">   
    		<li>
                <div class="select_main_job">
                    <img class="select_main_job_img select_main_job_img_change" src="img/jobicon/02/paladin.png" alt="">
                    <plus class="select_main_job_name">ナイト</plus>
                    <plus class="select_main_job_plus">+</plus></div>

    			<ul class="main_job_select_ul main_job_select_font display_none">
                    <li>-TANK-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
    				<li class="select_job_tank" name="paladin"><img class="select_main_job_img" src="img/jobicon/02/paladin.png" alt=""><plus class="select_main_job_name_li">ナイト</plus></li>
    				<li class="select_job_tank" name="warrior"><img class="select_main_job_img" src="img/jobicon/02/warrior.png" alt=""><plus class="select_main_job_name_li">戦士</plus></li>
                    <li class="select_job_tank" name="darkknight"><img class="select_main_job_img" src="img/jobicon/02/darkknight.png" alt=""><plus class="select_main_job_name_li">暗黒騎士</plus></li>
                    <li class="select_job_tank" name="gunbreaker"><img class="select_main_job_img" src="img/jobicon/02/gunbreaker.png" alt=""><plus class="select_main_job_name_li">ガンブレイカー</plus></li>
                    <li>-HEALER-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>                    
                    <li class="select_job_healer" name="whitemage"><img class="select_main_job_img" src="img/jobicon/02/whitemage.png" alt=""><plus class="select_main_job_name_li">白魔道士</plus></li>
                    <li class="select_job_healer" name="scholar"><img class="select_main_job_img" src="img/jobicon/02/scholar.png" alt=""><plus class="select_main_job_name_li">学者</plus></li>
                    <li class="select_job_healer" name="astrologian"><img class="select_main_job_img" src="img/jobicon/02/astrologian.png" alt=""><plus class="select_main_job_name_li">占星術士</plus></li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li>-DPS-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li class="select_job_dps" name="monk"><img class="select_main_job_img" src="img/jobicon/02/monk.png" alt=""><plus class="select_main_job_name_li">モンク</plus></li>
                    <li class="select_job_dps" name="dragoon"><img class="select_main_job_img" src="img/jobicon/02/dragoon.png" alt=""><plus class="select_main_job_name_li">竜騎士</plus></li>
                    <li class="select_job_dps" name="ninja"><img class="select_main_job_img" src="img/jobicon/02/ninja.png" alt=""><plus class="select_main_job_name_li">忍者</plus></li>
                    <li class="select_job_dps" name="samurai"><img class="select_main_job_img" src="img/jobicon/02/samurai.png" alt=""><plus class="select_main_job_name_li">侍</plus></li>
                    <li class="select_job_dps" name="bard"><img class="select_main_job_img" src="img/jobicon/02/bard.png" alt=""><plus class="select_main_job_name_li">吟遊詩人</plus></li>
                    <li class="select_job_dps" name="machinist"><img class="select_main_job_img" src="img/jobicon/02/machinist.png" alt=""><plus class="select_main_job_name_li">機工士</plus></li>
                    <li class="select_job_dps" name="dancer"><img class="select_main_job_img" src="img/jobicon/02/dancer.png" alt=""><plus class="select_main_job_name_li">踊り子</plus></li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li class="select_job_dps" name="blackmage"><img class="select_main_job_img" src="img/jobicon/02/blackmage.png" alt=""><plus class="select_main_job_name_li">黒魔道士</plus></li>
                    <li class="select_job_dps" name="summoner"><img class="select_main_job_img" src="img/jobicon/02/summoner.png" alt=""><plus class="select_main_job_name_li">召喚士</plus></li>
                    <li class="select_job_dps" name="redmage"><img class="select_main_job_img" src="img/jobicon/02/redmage.png" alt=""><plus class="select_main_job_name_li">赤魔道士</plus></li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <!-- <li class="select_job_dps" name="bluemage"><img class="select_main_job_img" src="img/jobicon/02/bluemage.png" alt=""><plus class="select_main_job_name_li">青魔道士</plus></li> -->
                    <li>-CRAFTER-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li class="select_job_crafter" name="carpenter"><img class="select_main_job_img" src="img/jobicon/02/carpenter.png" alt=""><plus class="select_main_job_name_li">木工師</plus></li>
                    <li class="select_job_crafter" name="blacksmith"><img class="select_main_job_img" src="img/jobicon/02/blacksmith.png" alt=""><plus class="select_main_job_name_li">鍛冶師</plus></li>
                    <li class="select_job_crafter" name="armorer"><img class="select_main_job_img" src="img/jobicon/02/armorer.png" alt=""><plus class="select_main_job_name_li">甲冑師</plus></li>
                    <li class="select_job_crafter" name="goldsmith"><img class="select_main_job_img" src="img/jobicon/02/goldsmith.png" alt=""><plus class="select_main_job_name_li">彫金師</plus></li>
    				<li class="select_job_crafter" name="leatherworker"><img class="select_main_job_img" src="img/jobicon/02/leatherworker.png" alt=""><plus class="select_main_job_name_li">革細工師</plus></li>
    				<li class="select_job_crafter" name="weaver"><img class="select_main_job_img" src="img/jobicon/02/weaver.png" alt=""><plus class="select_main_job_name_li">裁縫師</plus></li>
    				<li class="select_job_crafter" name="alchemist"><img class="select_main_job_img" src="img/jobicon/02/alchemist.png" alt=""><plus class="select_main_job_name_li">錬金術師</plus></li>
    				<li class="select_job_crafter" name="culinarian"><img class="select_main_job_img" src="img/jobicon/02/culinarian.png" alt=""><plus class="select_main_job_name_li">調理師</plus></li>
                    <li>-GATHERER-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
    				<li class="select_job_gatherer" name="miner"><img class="select_main_job_img" src="img/jobicon/02/miner.png" alt=""><plus class="select_main_job_name_li">採掘師</plus></li>
                    <li class="select_job_gatherer" name="botanist"><img class="select_main_job_img" src="img/jobicon/02/botanist.png" alt=""><plus class="select_main_job_name_li">園芸師</plus></li>
                    <li class="select_job_gatherer" name="fisher"><img class="select_main_job_img" src="img/jobicon/02/fisher.png" alt=""><plus class="select_main_job_name_li">釣師</plus></li>

    			</ul>

    		</li>		
    	</ul>
    </div>

    <!-- <select  class="main_job_select" name="main_job_select">
        <option class="main_job_select" value="ナイト">ナイト</option>
        <option class="main_job_select" value="戦士">戦士</option>
        <option class="main_job_select" value="ガンブレイカー">ガンブレイカー</option>
        <option class="main_job_select" value="モンク">モンク</option>
        <option class="main_job_select" value="竜騎士">竜騎士</option>
        <option class="main_job_select" value="忍者">忍者</option>
        <option class="main_job_select" value="白魔道士">白魔道士</option>
        <option class="main_job_select" value="学者">学者</option>
        <option class="main_job_select" value="占星術士">占星術士</option>
        <option class="main_job_select" value="吟遊詩人">吟遊詩人</option>
        <option class="main_job_select" value="機工士">機工士</option>
        <option class="main_job_select" value="踊り子">踊り子</option>
        <option class="main_job_select" value="黒魔道士">黒魔道士</option>
        <option class="main_job_select" value="召喚士">召喚士</option>
        <option class="main_job_select" value="赤魔道士">赤魔道士</option>
        <option class="main_job_select" value="青魔道士">青魔道士</option>
        <option class="main_job_select" value="木工師">木工師</option>
        <option class="main_job_select" value="鍛冶師">鍛冶師</option>
        <option class="main_job_select" value="甲冑師">甲冑師</option>
        <option class="main_job_select" value="彫金師">彫金師</option>
        <option class="main_job_select" value="革細工師">革細工師</option>
        <option class="main_job_select" value="裁縫師">裁縫師</option>
        <option class="main_job_select" value="錬金術師">錬金術師</option>
        <option class="main_job_select" value="調理師">調理師</option>
        <option class="main_job_select" value="採掘師">採掘師</option>
        <option class="main_job_select" value="園芸師">園芸師</option>
        <option class="main_job_select" value="釣師">釣師</option>
    </select> -->
 

  <!-- 文字情報 -->
  <p>フォント</p>
    <span class="char_info_font_span">
        <p class="char_info_font_p">
            <input type="radio" name="char_info_radio" value="Noto"><span class="Noto">Noto</span>
            <input type="radio" name="char_info_radio" value="Sawarabi"><span class="Sawarabi">Sawarabi</span>
            <input type="radio" name="char_info_radio" value="Kosugi"><span class="Kosugi">Kosugi</span>
            <input type="radio" name="char_info_radio" value="Potta"><span class="Potta">Potta</span>
            <input type="radio" name="char_info_radio" value="Hachi"><span class="Hachi">Hachi</span>
        </p>
        <p class="char_name_font_p">
            <input type="radio" name="char_info_radio" value="Yusei"><span class="Yusei">Yusei</span>
            <input type="radio" name="char_info_radio" value="RocknRol"><span class="RocknRol">RocknRol</span>
            <input type="radio" name="char_info_radio" value="Reggae"><span class="Reggae">Reggae</span>
            <input type="radio" name="char_info_radio" value="Stick"><span class="Stick">Stick</span>
            <input type="radio" name="char_info_radio" value="Dot"><span class="Dot">Dot</span>
        </p>
        <p>
            <button class="char_info_font_toname">キャラ名にも反映</button>
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
  <div id='コンテンツ' class="tab-content">

  <p>お気に入りコンテンツ</p>
    <span class="favorite_contents_span">
        <input class="favorite_contents" type="checkbox" name="001" value="レベリング・"><img class="favorite_contents_img" src="img\faveriteicon\faverite001.png" alt="">レベリング
        <input class="favorite_contents" type="checkbox" name="015" value="メインストーリー・"><img class="favorite_contents_img" src="img\faveriteicon\faverite015.png" alt="">メインストーリー
        <input class="favorite_contents" type="checkbox" name="002" value="クラフター・"><img class="favorite_contents_img" src="img\faveriteicon\faverite002.png" alt="">クラフター<br>
        <input class="favorite_contents" type="checkbox" name="003" value="ギャザラー・"><img class="favorite_contents_img" src="img\faveriteicon\faverite003.png" alt="">ギャザラー
        <input class="favorite_contents" type="checkbox" name="004" value="グルポ・"><img class="favorite_contents_img" src="img\faveriteicon\faverite004.png" alt="">グルポ
        <input class="favorite_contents" type="checkbox" name="005" value="ミラプリ・"><img class="favorite_contents_img" src="img\faveriteicon\faverite005.png" alt="">ミラプリ
        <input class="favorite_contents" type="checkbox" name="006" value="おしゃべり・"><img class="favorite_contents_img" src="img\faveriteicon\faverite006.png" alt="">おしゃべり<br>
        <input class="favorite_contents" type="checkbox" name="007" value="ハウジング・"><img class="favorite_contents_img" src="img\faveriteicon\faverite007.png" alt="">ハウジング
        <input class="favorite_contents" type="checkbox" name="008" value="ゴールドソーサー・"><img class="favorite_contents_img" src="img\faveriteicon\faverite008.png" alt="">ゴールドソーサー
        <input class="favorite_contents" type="checkbox" name="009" value="演奏・"><img class="favorite_contents_img" src="img\faveriteicon\faverite009.png" alt="">演奏<br>
        <input class="favorite_contents" type="checkbox" name="010" value="レハン・"><img class="favorite_contents_img" src="img\faveriteicon\faverite010.png" alt="">トレハン
        <input class="favorite_contents" type="checkbox" name="011" value="討伐/討滅戦・"><img class="favorite_contents_img" src="img\faveriteicon\faverite011.png" alt="">討伐/討滅戦
        <input class="favorite_contents" type="checkbox" name="012" value="零式・"><img class="favorite_contents_img" src="img\faveriteicon\faverite012.png" alt="">零式
        <input class="favorite_contents" type="checkbox" name="013" value="絶・"><img class="favorite_contents_img" src="img\faveriteicon\faverite013.png" alt="">絶
        <input class="favorite_contents" type="checkbox" name="014" value="PvP・"><img class="favorite_contents_img" src="img\faveriteicon\faverite014.png" alt="">PvP
    </span>

  <p>見出し</p>
  <p>色:<span id="char_favorite_h_span"></span></p>
　<span class="char_favorite_h_span">
　  <md-color-picker id="char_favorite_h" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
　</span>

　<p>テキスト</p>
  <p>色:<span id="char_favorite_text_h_span"></span></p>
　<span class="char_favorite_text_h_span">
　  <md-color-picker id="char_favorite_text_h" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
　</span>

  </div>
</div>



<div class='widget'>
  <div id='ジョブ' class="tab-content">
  <p>ジョブアイコン</p>
  <span class="job_icon_list_span">
        <p class="job_icon_list_p">
            <input type="radio" name="job_icon_list" value="01"><span class="job_icon_list"><img src="/img/jobicon/01/paladin.png" alt=""></span>
            <input type="radio" name="job_icon_list" value="02"><span class="job_icon_list"><img src="/img/jobicon/02/paladin.png" alt=""></span>
            <input type="radio" name="job_icon_list" value="03"><span class="job_icon_list"><img src="/img/jobicon/03/paladin.png" alt=""></span>
            <input type="radio" name="job_icon_list" value="04"><span class="job_icon_list"><img src="/img/jobicon/04/paladin.png" alt=""></span>
        </p> 
  </span>

    <p>フォント</p>
  　<button class="job_icon_list_font_name">キャラ名　と同じフォントにする</button>
    <button class="job_icon_list_font_info">キャラ情報と同じフォントにする</button>

　<p>微調整</p>
  <table>
    <tr>
        <td>位置</td>
        <td>大きさ</td>
        <td>行間</td>
    </tr>
    <tr>
        <td>
            <button class="button_up">△</button>
        </td>     
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <button class="button_left">◁</button>
            <button class="button_rigth">▷</button>
        </td>
        <td>
            <button class="button_minus">－</button>
            <button class="button_puls">＋</button>
        </td>
        <td>
            <button class="button_line_minus">－</button>
            <button class="button_line_puls">＋</button>
        </td>
        </td>
    </tr>
    <tr>
        <td>
            <button class="button_down">▽</button>
        </td>
        <td></td>
        <td></td>
    </tr>
  </table>


  <p>通常の色</p>
  <p>色:<span id="job_icon_list_color_span"></span></p>
　<span class="job_icon_list_color">
　  <md-color-picker id="job_icon_list_color" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
　</span>

　<p>カンストジョブの色</p>
  <p>色:<span id="job_icon_list_color_const_span"></span></p>
　<span class="job_icon_list_color_const">
　  <md-color-picker id="job_icon_list_color_const" color-margin="4" colors-per-row="8" color-size="30" default-tint="500" fixedMinHeight="true" palette="material-full" use-spectrum-picker="true" value="#000000"></md-color-picker>
　</span>
 





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