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

                                    <div class="contents_input_version">
                                        <select name="version" id="version">
                                            <option value="shadowbringers">漆黒</option>
                                            <option value="stormblood">紅蓮</option>
                                            <option value="heavensward">蒼天</option>
                                            <option value="arealmreborn">新生</option>
                                        </select>
                                    </div>

                                    <div class="contents_input_contentsname">
                                        <select name="contentsname" id="contentsname">
                                            <option value="EdensPromise" class="shadowbringers">再生編</option>
                                            <option value="EdensVerse" class="shadowbringers">共鳴編</option>
                                            <option value="EdensGate" class="shadowbringers">覚醒編</option>
                                            <option value="Alphascape" class="stormblood">アルファ編</option>
                                            <option value="Sigmascape" class="stormblood">シグマ編</option>
                                            <option value="Deltascape" class="stormblood">デルタ編</option>
                                            <option value="TheSouloftheCreator" class="heavensward">天動編</option>
                                            <option value="TheBurdenoftheSon" class="heavensward">律動編</option>
                                            <option value="TheFistoftheFather" class="heavensward">起動編</option>
                                            <option value="TheFinalCoilofBahamut" class="arealmreborn">真成編</option>
                                            <option value="TheSecondCoilofBahamut" class="arealmreborn">侵攻編</option>
                                            <option value="TheBindingCoilofBahamut" class="arealmreborn">邂逅編</option>
                                        </select>
                                    </div>

                                    <div class="contents_input_contents">
                                        <select name="contents" id="contents">
                                            <option value="EdensPromise01" class="EdensPromise">1層</option>
                                            <option value="EdensPromise02" class="EdensPromise">2層</option>
                                            <option value="EdensPromise03" class="EdensPromise">3層</option>
                                            <option value="EdensPromise04" class="EdensPromise">4層前半</option>
                                            <option value="EdensPromise05" class="EdensPromise">4層後半</option>
                                            <option value="EdensPromise06" class="EdensPromise">4層前後半</option>
                                            <option value="EdensVerse01" class="EdensVerse">1層</option>
                                            <option value="EdensVerse02" class="EdensVerse">2層</option>
                                            <option value="EdensVerse03" class="EdensVerse">3層</option>
                                            <option value="EdensVerse04" class="EdensVerse">4層</option>
                                            <option value="EdensGate01" class="EdensGate">1層</option>
                                            <option value="EdensGate02" class="EdensGate">2層</option>
                                            <option value="EdensGate03" class="EdensGate">3層</option>
                                            <option value="EdensGate04" class="EdensGate">4層</option>
                                            <option value="Alphascape01" class="Alphascape">1層</option>
                                            <option value="Alphascape02" class="Alphascape">2層</option>
                                            <option value="Alphascape03" class="Alphascape">3層</option>
                                            <option value="Alphascape04" class="Alphascape">4層前半</option>
                                            <option value="Alphascape05" class="Alphascape">4層後半</option>
                                            <option value="Alphascape06" class="Alphascape">4層前後半</option>
                                            <option value="Sigmascape01" class="Sigmascape">1層</option>
                                            <option value="Sigmascape02" class="Sigmascape">2層</option>
                                            <option value="Sigmascape03" class="Sigmascape">3層</option>
                                            <option value="Sigmascape04" class="Sigmascape">4層前半</option>
                                            <option value="Sigmascape05" class="Sigmascape">4層後半</option>
                                            <option value="Sigmascape06" class="Sigmascape">4層前後半</option>
                                            <option value="Deltascape01" class="Deltascape">1層</option>
                                            <option value="Deltascape02" class="Deltascape">2層</option>
                                            <option value="Deltascape03" class="Deltascape">3層</option>
                                            <option value="Deltascape04" class="Deltascape">4層前半</option>
                                            <option value="Deltascape05" class="Deltascape">4層後半</option>
                                            <option value="Deltascape06" class="Deltascape">4層前後半</option>
                                            <option value="TheSouloftheCreator01" class="TheSouloftheCreator">1層</option>
                                            <option value="TheSouloftheCreator02" class="TheSouloftheCreator">2層</option>
                                            <option value="TheSouloftheCreator03" class="TheSouloftheCreator">3層</option>
                                            <option value="TheSouloftheCreator04" class="TheSouloftheCreator">4層</option>
                                            <option value="TheBurdenoftheSon01" class="TheBurdenoftheSon">1層</option>
                                            <option value="TheBurdenoftheSon02" class="TheBurdenoftheSon">2層</option>
                                            <option value="TheBurdenoftheSon03" class="TheBurdenoftheSon">3層</option>
                                            <option value="TheBurdenoftheSon04" class="TheBurdenoftheSon">4層</option>
                                            <option value="TheFistoftheFather01" class="TheFistoftheFather">1層</option>
                                            <option value="TheFistoftheFather02" class="TheFistoftheFather">2層</option>
                                            <option value="TheFistoftheFather03" class="TheFistoftheFather">3層</option>
                                            <option value="TheFistoftheFather04" class="TheFistoftheFather">4層</option>
                                            <option value="TheFinalCoilofBahamut01" class="TheFinalCoilofBahamut">1層</option>
                                            <option value="TheFinalCoilofBahamut02" class="TheFinalCoilofBahamut">2層</option>
                                            <option value="TheFinalCoilofBahamut03" class="TheFinalCoilofBahamut">3層</option>
                                            <option value="TheFinalCoilofBahamut04" class="TheFinalCoilofBahamut">4層</option>
                                            <option value="TheSecondCoilofBahamut01" class="TheSecondCoilofBahamut">1層</option>
                                            <option value="TheSecondCoilofBahamut02" class="TheSecondCoilofBahamut">2層</option>
                                            <option value="TheSecondCoilofBahamut03" class="TheSecondCoilofBahamut">3層</option>
                                            <option value="TheSecondCoilofBahamut04" class="TheSecondCoilofBahamut">4層</option>
                                            <option value="TheBindingCoilofBahamut01" class="TheBindingCoilofBahamut">1層</option>
                                            <option value="TheBindingCoilofBahamut02" class="TheBindingCoilofBahamut">2層</option>
                                            <option value="TheBindingCoilofBahamut03" class="TheBindingCoilofBahamut">3層</option>
                                            <option value="TheBindingCoilofBahamut04" class="TheBindingCoilofBahamut">4層</option>
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