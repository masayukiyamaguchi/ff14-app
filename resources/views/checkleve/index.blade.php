<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--共通のCSS-->
    <link rel="stylesheet" href="/css/mainTopHeader.css">
    <link rel="stylesheet" href="/css/mainTopFooter.css">

    <!--コンテンツのCSS-->
    <link rel="stylesheet" href="/css/checkleve/contents.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/checkleve/main.js"></script>

    <!-- スクショ -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">



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
                <div id="target" class="mainContents_container_center">
                    <div class="center_h0">
                        <div class="leveicon leveiconleft">
                            <img src="images/checkleve/schedule_dutyicon_guildhests.png" alt="">
                        </div>

                        <div class="center_h0_text">
                            ただリーヴ券が溢れないようにしてくれるツール
                        </div>

                        <div class="leveicon leveiconright">
                            <img src="images/checkleve/schedule_dutyicon_guildhests.png" alt="">
                        </div>

                    </div>

                    <div class="center_h1">
                        現在のリーブ券の枚数を入力してください
                    </div>

                    <div class="input_area">

                        <div class="input">
                            <div class="input_area_text">
                                <input id="leave_num" type="text" value="">
                            </div>

                            <div class="input_area_text_none"></div>

                            <div class="input_floatleft_text">枚</div>

                        </div>

                        <div class="input_floatleft_button">
                            <a class="button" id="calculation_date" href="#"><span>計算</span></a>
                        </div>

                    </div>


                    <div class="message_panel">
                        <div class="message_icon"><img class="message_icon_img" src="images/checkleve/leveicon1.png" alt=""></div>
                        <div class="message_div"></div>
                        <div id="desired_date"></div>
                    </div>




                </div>

                <!-- ライト　-->
                <div class="mainContents_container_right">



                </div>


            </div>
        </div>
    </div>

    <div class="checkleve_footer">

        <a href="https://twitter.com/share?
url=https://ff14-app.com/checkleve%0a&
related=@pellegrinogame%0a&
hashtags=ただリーヴ券が溢れないようにしてくれるツール%0a&
text=次にリーヴ券がたまるまで！%0a" rel="nofollow" target="_blank">
            <img src="/images/checkleve/twittericon.png" alt="" /></a>


        <div id="plotter-img">ダウンロード</div>
    </div>


    <!--共通フッター-->
    @component('components.commonFooterMenu')
    @endcomponent


</body>

</html>