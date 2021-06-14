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
<div class="input_data_div">


<form action="{{route('generate')}}" method="post" enctype="multipart/form-data">
    @csrf

    <table class="input_data_table">
        <tr>
            <th>Lodestone ID</th>
            <td><input type="text" class="id_input" name="loadstone_id"></td>
        </tr>

        <tr>
            <th>スクショ選択</th>
            <td><input type="file" class="img_button" name="file_upload"></td>
        </tr>

        <tr>
            <th></th>
            <td><img class="img_preview" style="width:200px;"></td>
        </tr>


    </table>

    <p class="error_text">{{$error}}</p>

    <div class="generate_button_div">
        <input type="submit" class="generate_button" value="制作">
    </div>

</form>


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