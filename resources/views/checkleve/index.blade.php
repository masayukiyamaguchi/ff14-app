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

                    <div class="center_h0">
                        <div class="leveicon">
                            <img src="images/checkleve/schedule_dutyicon_guildhests.png" alt="">
                        </div>

                        <div class="center_h0_text">
                            ただリーヴ件が溢れないようにしてくれるツール
                        </div>

                        <div class="leveicon">
                            <img src="images/checkleve/schedule_dutyicon_guildhests.png" alt="">
                        </div>

                    </div>

                    <div class="center_h1">
                        <p>現在のリーブ件の枚数を入力してください</p>
                    </div>

                    <div class="input_area">

                        <div class="input">
                            <div class="input_area_text">
                                <input id="leave_num" type="text" value="">
                            </div>

                            <div class="input_floatleft_text">枚</div>

                        </div>

                        <div class="input_floatleft_button">
                            <button id="calculation_date" name="calculation_date">計算</button>
                        </div>

                    </div>

                    <div>
                        <p id="desired_date"></p>
                    </div>


                </div>

                <!-- ライト　-->
                <div class="mainContents_container_right">


                </div>


            </div>
        </div>
    </div>

    <!--共通フッター-->
    @component('components.commonFooterMenu')
    @endcomponent


</body>

</html>