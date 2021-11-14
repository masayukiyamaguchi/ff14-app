$(function() {

    var leftMenuColor = "rgb(24, 24, 24)";
    var leftMenuColrOnMouse = "rgb(56, 56, 56)";
    var mainContentsColor = "rgb(33, 33, 33)";

    var activeLeftMenu = 0;

    //レフトメニューオンマウス
    $(".left_menu_h2").hover(
        function(){
            $(this).css("background-color",leftMenuColrOnMouse);
        },
        function(){
            if($(this).next("ul").css("display")!="block")
            {
                $(this).css("background-color",leftMenuColor);
            }            
    });


    //レフトメニューオンマウス(子要素)
    $(".left_menu_ul li").hover(
        function(){
            $(this).css("background-color",leftMenuColrOnMouse);
        },
        function(){
            if($(".left_menu_ul li").index(this) != activeLeftMenu)
            {
                $(this).css("background-color",leftMenuColor);
            }
    });

    //レフトメニュークリック(子要素)
    $(".left_menu_ul li").click(function()
    {
        //アクティブの位置を記憶
        activeLeftMenu = $(".left_menu_ul li").index(this);
        //とりあえず自分以外の全部のメニューの背景を消す
        $(".left_menu_ul li").css("background-color",leftMenuColor);
        //自分だけ色を付ける
        $(this).css("background-color",leftMenuColrOnMouse);

        //ajax
        AjaxLeftMenuClick($(this).attr("data-cpmtemts"));

    })
    
   
    //レフトメニュークリック
    $(".left_menu_h2").click(function()
    {
        //とりあえず自分以外の全部のメニューの背景を消す
        $(this).siblings(".left_menu_h2").css("background-color",leftMenuColor);

        //開いていたら
        if($(this).next("ul").css("display")=="block")
        {
            //動かないほうがかっこいいのでこれで
            //$(this).next("ul").slideUp(200);

        //閉じてたら
        }else{
            
            $(".left_menu_ul").slideUp(200);
            $(this).next("ul").slideDown(200);
        }
    
    });


    //非同期処理
    function AjaxLeftMenuClick(dataCpmtemts)
    {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },//Headersを書き忘れるとエラーになる
            url: '/moviesearch/moviesearchajax',
            type: 'post',
            dataType: "json",
            data: {
                dataCpmtemts:dataCpmtemts,
              },
        })
        // Ajaxリクエスト成功時の処理
        .done(function(data) {
            // Laravel内で処理された結果がdataに入って返ってくる

            RemakeMovieList(data);

        })
        // Ajaxリクエスト失敗時の処理
        .fail(function(data) {
            alert('Ajaxリクエスト失敗');
        });
    }


    function RemakeMovieList(data)
    {
        $(".movie_list").empty();

        $.each(data,function(index,data){

        //枠形成
        if(index%4==0){
            $('.movie_list').last().append('<ul class="movie_list_ul">');
        }        
        $('.movie_list_ul').last().append('<div class="movie_list_div">');
        $('.movie_list_div').last().append('<li>');
        $('.movie_list_div li').last().append('<div class="movie_list_samneil">');
        $('.movie_list_samneil').last().after('<div class="movie_list_detail">');
        $('.movie_list_detail').last().append('<div class="movie_list_detail_channelicon">');
        $('.movie_list_detail_channelicon').last().after('<div class="movie_list_detail_text">');
        $('.movie_list_detail_text').last().append('<div class="movie_list_detail_text_title">');
        $('.movie_list_detail_text_title').last().after('<div class="movie_list_detail_text_channelname">');

        //コンテンツ生成
        $('.movie_list_samneil').last().append('<img src="'+data["samneil_img"]+'" alt="'+data["movie_title"]+'">');
        $('.movie_list_samneil img').last().wrap('<a href="/moviesearch/'+data["movie_id"]+'/">');

        $('.movie_list_detail_channelicon').last().append('<img src="'+data["channel_img"]+'" alt="'+data["movie_title"]+'">');

        $('.movie_list_detail_text_title').last().append('<a href="/moviesearch/'+data["movie_id"]+'/">'+data["movie_title"]+'</a>');
        
        $('.movie_list_detail_text_channelname').last().append(data["channel_name"]);        

        });

    }



    $(".left_menu_h1").click(function(){

        var clickVarsionName = $(this).parent().attr("id");
        
        //開いていたら
        if($("#"+clickVarsionName+" .left_menu_h2").css("display")=="block")
        {
            //動かないほうがかっこいいのでこれで
            //$("#"+clickVarsionName+" .left_menu_h2,.left_menu_ul").slideUp(200);
        
        //閉じてたら
        }else
        {
            $(".left_menu_h2,.left_menu_ul").slideUp(200);
            $("#"+clickVarsionName+" .left_menu_h2").slideDown(200);

        }


    });


    //クラス名を受け取り、displayを逆に変更
    function ChangeDisplayCss(className)
    {
        if($(className).css("display")=="none")
        {
            $(className).css("display","block");
        }else
        {
            $(className).css("display","none");
        }
    }


    //moviepostページのjs
    //コンテンツの変更
    $(".contents_input_version").change(function()
    {
        //１段目バージョンを変更　取得
        var dataVersion =  $('.contents_input_version option:selected').val();

        //いったん全部消す
        $(".contents_input_contentsname option").css("display","none");
        //選んだバージョンだけ表示
        $(".contents_input_contentsname").find("."+dataVersion).css("display","block");
        //一番上の選択肢をセット
        var contentsname = $(".contents_input_contentsname").find("."+dataVersion).first().val();
        $("#contentsname").val(contentsname);
        $(".contents_input_contentsname").change();
    });

    $(".contents_input_contentsname").change(function ()
    {
        //１段目バージョンを変更　取得
        var contentsname =  $('.contents_input_contentsname option:selected').val();
        //いったん全部消す
        $(".contents_input_contents option").css("display","none");
        //選んだバージョンだけ表示
        $(".contents_input_contents").find("."+contentsname).css("display","block");
        //一番上の選択肢をセット
        var contents = $(".contents_input_contents").find("."+contentsname).first().val();
        $("#contents").val(contents);  
    });



    //初回実行

    //最初のメニューは開いておく
    var nowVarsitonName = $(".mainContents_container_left div:first-child").attr("id");
    ChangeDisplayCss("#"+nowVarsitonName+" .left_menu_h2"); 
    $(".left_menu_ul").first().css("display","block");

    //最初のメニューは色を変える
    $(".left_menu_h2").first().css("background-color",leftMenuColrOnMouse);
    $(".left_menu_ul li").first().css("background-color",leftMenuColrOnMouse);

    //入力フォーム最初のバージョンをセット
    var version =  $('.contents_input_version option:selected').val();
    $("#version").val(version);
    $(".contents_input_version").change();
    
});