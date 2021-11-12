<!DOCTYPE html>
<html lang="jp">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/moviesearch/postcontents.css">
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

 

                </div>


                <!-- センター　-->
                <div class="mainContents_container_center">

                    <div class="formfield">

                        <div class="formfield_h1">
                            <h1>動画投稿画面</h1>
                        </div>

                        <div class="formfield_inputfield">

                            <div class="error_messase">
                                @if ($errors->any())
                                 <ul>
                                @foreach ($errors->all() as $error)
                                
                                <li>{{ $error }}</li>
                                
                                @endforeach
                                </ul>
                                @endif
                            </div>

                            <form action="postcontents/create"  method="post" class="formfield_inputfield_form">
                                
                                @csrf

                                <div class="input_movie_url">
                                    <div class="input_movie_url_text">
                                        動画URL
                                    </div>
                                    <div class="input_movie_url_input">                                        
                                        <input type="text" name="movie_url">
                                    </div>
                                </div>

                                <div class="bool_vc">
                                    <div class="bool_vc_input">
                                        <input type="checkbox" name="bool_vc" id="bool_vc">
                                        <div class="bool_vc_text">
                                            ボイスチャット
                                        </div>
                                    </div>
                                </div>

                                <div class="bool_guide">
                                    <div class="bool_guide_input">
                                        <input type="checkbox" name="bool_guide" id="bool_guide">
                                        <div class="bool_guide_text">
                                            解説
                                        </div>
                                    </div>
                                </div>

                                <div class="bool_clear">
                                    <div class="bool_clear_input">
                                        <input type="checkbox" name="bool_clear" id="bool_clear">
                                        <div class="bool_clear_text">
                                            クリアー動画
                                        </div>
                                    </div>
                                </div>

                                <div class="bool_act">
                                    <div class="bool_act_input">
                                        <input type="checkbox" name="bool_act" id="bool_act">
                                        <div class="bool_act_text">
                                            DPS表示
                                        </div>
                                    </div>
                                </div>

                                <!--
                                <div class="gimick_process">

                                </div>
                                -->

                                <div class="play_job">                                    
                                    <div class="play_job_text">
                                        視点ジョブ
                                    </div>
                                    <div class="play_job_input">
                                        <select name="play_job" id="play_job">
                                            <option class="tank" value="paladin">ナイト</option>
                                            <option class="tank" value="warrior">戦士</option>
                                            <option class="tank" value="dark knight">暗黒騎士</option>
                                            <option class="tank" value="gunbreaker">ガンブレイカー</option>
                                            <option class="dps" value="monk">モンク</option>
                                            <option class="dps" value="dragoon">竜騎士</option>
                                            <option class="dps" value="ninja">忍者</option>
                                            <option class="dps" value="samurai">侍</option>
                                            <option class="dps" value="reaper">リーパー</option>
                                            <option class="dps" value="bard">吟遊詩人</option>
                                            <option class="dps" value="machinist">機工士</option>
                                            <option class="dps" value="dancer">踊り子</option>
                                            <option class="dps" value="black mage">黒魔道士</option>
                                            <option class="dps" value="summoner">召喚士</option>
                                            <option class="dps" value="red mage">赤魔道士</option>
                                            <option class="dps" value="blue mage">青魔道士</option>
                                            <option class="healer" value="white mage">白魔道士</option>
                                            <option class="healer" value="scholar">学者</option>
                                            <option class="healer" value="astrologian">占星術士</option>
                                            <option class="healer" value="sage">賢者</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="contents">
                                    <div class="contents_text">
                                        コンテンツ
                                    </div>

                                    <div class="contents_input">
                                        <select name="contents" id="contents">
                                            <option value="EdensPromise01">1層</option>
                                            <option value="EdensPromise02">2層</option>
                                            <option value="EdensPromise03">3層</option>
                                            <option value="EdensPromise04f">4層前半</option>
                                            <option value="EdensPromise04l">4層後半</option>
                                            <option value="EdensPromise04fl">4層前後半</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="formfield_submit">
                                    <input type="submit" value="送信">
                                </div>                            
                            </form>    

                        </div>


                    </div>

          
                    
                    

                </div>


            </div>
        </div>
    </div>

    <!--共通フッター-->
    @component('components.commonFooterMenu')
    @endcomponent
    

</body>
</html>