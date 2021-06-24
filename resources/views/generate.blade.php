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
            <span class="char_race char_info">種族/性別</span>
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
                <span class="char_info"><img src="img\faveriteicon\faverite001.png" alt="">レベリング・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite002.png" alt="">クラフター・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite003.png" alt="">ギャザラー・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite004.png" alt="">グルポ・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite005.png" alt="">ミラプリ・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite006.png" alt="">おしゃべり・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite007.png" alt="">ハウジング・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite008.png" alt="">ゴールドソーサー・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite009.png" alt="">演奏・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite010.png" alt="">トレハン・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite011.png" alt="">討伐/討滅戦・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite012.png" alt="">零式・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite013.png" alt="">絶・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite014.png" alt="">PvP・</span>
                <span class="char_info"><img src="img\faveriteicon\faverite015.png" alt="">メインストーリー・</span>
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
    <p>メインジョブ</p>
    <div class="main_job_select_div">
        <ul class="main_job_select_ul">   
    		<li>
                <div class="select_main_job">
                    <img class="select_main_job_img" src="img/jobicon/02/paladin.png" alt="">
                    <plus class="select_main_job_name">ナイト</plus>
                    <plus class="select_main_job_plus">+</plus></div>

    			<ul class="main_job_select_ul main_job_select_font display_none">
                    <li>-TANK-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
    				<li class="select_job_tank"><img class="select_main_job_img" src="img/jobicon/02/paladin.png" alt=""><plus class="select_main_job_name_li">ナイト</plus></li>
    				<li class="select_job_tank"><img class="select_main_job_img" src="img/jobicon/02/warrior.png" alt=""><plus class="select_main_job_name_li">戦士</plus></li>
                    <li class="select_job_tank"><img class="select_main_job_img" src="img/jobicon/02/darkknight.png" alt=""><plus class="select_main_job_name_li">暗黒騎士</plus></li>
                    <li class="select_job_tank"><img class="select_main_job_img" src="img/jobicon/02/gunbreaker.png" alt=""><plus class="select_main_job_name_li">ガンブレイカー</plus></li>
                    <li>-HEALER-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>                    
                    <li class="select_job_healer"><img class="select_main_job_img" src="img/jobicon/02/whitemage.png" alt=""><plus class="select_main_job_name_li">白魔道士</plus></li>
                    <li class="select_job_healer"><img class="select_main_job_img" src="img/jobicon/02/scholar.png" alt=""><plus class="select_main_job_name_li">学者</plus></li>
                    <li class="select_job_healer"><img class="select_main_job_img" src="img/jobicon/02/astrologian.png" alt=""><plus class="select_main_job_name_li">占星術士</plus></li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li>-DPS-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/monk.png" alt=""><plus class="select_main_job_name_li">モンク</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/dragoon.png" alt=""><plus class="select_main_job_name_li">竜騎士</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/ninja.png" alt=""><plus class="select_main_job_name_li">忍者</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/samurai.png" alt=""><plus class="select_main_job_name_li">侍</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/bard.png" alt=""><plus class="select_main_job_name_li">吟遊詩人</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/machinist.png" alt=""><plus class="select_main_job_name_li">機工士</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/dancer.png" alt=""><plus class="select_main_job_name_li">踊り子</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/blackmage.png" alt=""><plus class="select_main_job_name_li">黒魔道士</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/summoner.png" alt=""><plus class="select_main_job_name_li">召喚士</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/redmage.png" alt=""><plus class="select_main_job_name_li">赤魔道士</plus></li>
                    <li class="select_job_dps"><img class="select_main_job_img" src="img/jobicon/02/bluemage.png" alt=""><plus class="select_main_job_name_li">青魔道士</plus></li>
                    <li>-CRAFTER-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
                    <li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/carpenter.png" alt=""><plus class="select_main_job_name_li">木工師</plus></li>
                    <li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/blacksmith.png" alt=""><plus class="select_main_job_name_li">鍛冶師</plus></li>
                    <li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/armorer.png" alt=""><plus class="select_main_job_name_li">甲冑師</plus></li>
                    <li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/goldsmith.png" alt=""><plus class="select_main_job_name_li">彫金師</plus></li>
    				<li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/leatherworker.png" alt=""><plus class="select_main_job_name_li">革細工師</plus></li>
    				<li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/weaver.png" alt=""><plus class="select_main_job_name_li">裁縫師</plus></li>
    				<li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/alchemist.png" alt=""><plus class="select_main_job_name_li">錬金術師</plus></li>
    				<li class="select_job_crafter"><img class="select_main_job_img" src="img/jobicon/02/culinarian.png" alt=""><plus class="select_main_job_name_li">調理師</plus></li>
                    <li>-GATHERER-</li>
                    <li><img class="select_main_job_img" src="img/jobicon/02/1dot.png" alt=""><plus class="select_main_job_name_li"></plus></li>
    				<li class="select_job_gatherer"><img class="select_main_job_img" src="img/jobicon/02/miner.png" alt=""><plus class="select_main_job_name_li">採掘師</plus></li>
                    <li class="select_job_gatherer"><img class="select_main_job_img" src="img/jobicon/02/botanist.png" alt=""><plus class="select_main_job_name_li">園芸師</plus></li>
                    <li class="select_job_gatherer"><img class="select_main_job_img" src="img/jobicon/02/fisher.png" alt=""><plus class="select_main_job_name_li">釣師</plus></li>

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