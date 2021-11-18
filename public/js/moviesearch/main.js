$(function() {

    var leftMenuColor = "rgb(24, 24, 24)";
    var leftMenuColrOnMouse = "rgb(56, 56, 56)";
    var mainContentsColor = "rgb(33, 33, 33)";

    var activeLeftMenu = 0;
    var sort_view_count = "DESC";
    var sort_published_at = "NONE";
    var filter_bool_vc = "NONE";
    var filter_string_guide = "NONE";
    var filter_bool_clear = "NONE";
    var filter_bool_act = "NONE";
    var filter_language = "NONE";

    var filter_play_job = [
        "paladin",
        "warrior",
        "darkknight",
        "gunbreaker",
        "monk",
        "dragoon",
        "ninja",
        "samurai",
        "reaper",
        "whitemage",
        "scholar",
        "astrologian",
        "sage",
        "bard",
        "machinist",
        "dancer",
        "blackmage",
        "summoner",
        "redmage",
        "bluemage",
        "NONE"
    ];

    var filterData;

 
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
        AjaxMenuClick();

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
    function AjaxMenuClick()
    {
        //コンテンツを検索
        var dataContents = $(".left_menu_ul li").eq(activeLeftMenu).attr("data-contents");

        localStorage["sort_view_count"] = sort_view_count;
        localStorage["sort_published_at"] = sort_published_at;
        localStorage["filter_bool_vc"] = filter_bool_vc;
        localStorage["filter_string_guide"] = filter_string_guide;
        localStorage["filter_bool_clear"] = filter_bool_clear;
        localStorage["filter_bool_act"] = filter_bool_act;
        localStorage["filter_language"] = filter_language;
        filter_play_job_json = JSON.stringify(filter_play_job, undefined, 1);
        localStorage["filter_play_job"] =  filter_play_job_json;

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },//Headersを書き忘れるとエラーになる
            url: '/moviesearch/moviesearchajax',
            type: 'post',
            dataType: "json",
            data: {
                dataContents:dataContents,
                sort_view_count:sort_view_count,
                sort_published_at:sort_published_at,
                filter_bool_vc:filter_bool_vc,
                filter_bool_act:filter_bool_act,
                filter_play_job:filter_play_job,
                filter_string_guide:filter_string_guide,
                filter_bool_clear:filter_bool_clear,
                filter_language:filter_language,
              },
        })
        // Ajaxリクエスト成功時の処理
        .done(function(data) {
            // Laravel内で処理された結果がdataに入って返ってくる
            RemakeMovieList(data);

            //内容を記録しておく
            filterData = data;

        })
        // Ajaxリクエスト失敗時の処理
        .fail(function(data) {
            alert('Ajaxリクエスト失敗');
        });
    }

    //ajax後にページを再生成
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
        $('.movie_list_detail_text_channelname').last().after('<div class="movie_list_detail_view_count">');

        //コンテンツ生成
        $('.movie_list_samneil').last().append('<img src="'+data["samneil_img"]+'" alt="'+data["movie_title"]+'">');
        $('.movie_list_samneil img').last().wrap('<a href="/moviesearch/'+data["movie_id"]+'/">');

        $('.movie_list_detail_channelicon').last().append('<img src="'+data["channel_img"]+'" alt="'+data["movie_title"]+'">');

        $('.movie_list_detail_text_title').last().append('<a href="/moviesearch/'+data["movie_id"]+'/">'+data["movie_title"]+'</a>');
        
        $('.movie_list_detail_text_channelname').last().append(data["channel_name"]);

        $('.movie_list_detail_view_count').last().append(data["view_count_str"]+"・"+data["published_at_str"]);

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


    //ボタンホバーアニメーション
    $(".movie_list_filter_button").hover(function(){
        if($(this).css("background-color") != 'rgb(165, 42, 42)' && $(this).css("background-color") != 'rgb(42, 50, 165)')
        {
            $(this).animate(
                {
                  'backgroundColor': '#636363'
                }, 70
              );
        }        
    },
    function(){
        if($(this).css("background-color") != 'rgb(165, 42, 42)' && $(this).css("background-color") != 'rgb(42, 50, 165)')
        {
            $(this).animate(
                {
                  'backgroundColor': '#444444'
                }, 70
              );
        }        
    });


    //フィルターメニュー
    //ソート：ジョブ
    $(document).on('click',function(e) {

        if(!$(e.target).closest('#filter_play_job,.filter_play_job_menu').length) {
            
            // ターゲット要素の外側をクリックした時の操作            
            $(".filter_play_job_menu > div").slideUp(100);
            //ajax
            AjaxMenuClick();

        } else {
            // ターゲット要素をクリックした時の操作
            //決定ボタンは無視する
            if(e.target.className == "enter_text" || e.target.className == "filter_play_job_menu_enter_button")
            {
            }else{
                $(".filter_play_job_menu > div").slideDown(100);
            }            
        }
    });


    //引数の配列のジョブを削除
    function DeleteJobList(deletejoblist)
    {
        filter_play_job = filter_play_job.filter(function(v){
            return ! deletejoblist.includes(v);
        });
    }

    //引数の配列のジョブを追加
    function AddJobList(addjoblist)
    {
        filter_play_job = filter_play_job.concat(addjoblist);
    }

    //アイコンクリック
    $(".play_job_icon").click(function(){

        //裏の変数の調整
        var jobdata = $(this).attr("data-job");
        JobListScrutiny(jobdata);

        //アイコン見た目変更
        if($(this).attr("data-stat") == "on")
        {
            $(this).attr("data-stat","off");
            $(this).css("filter","opacity(20%)")
        }else{
            $(this).attr("data-stat","on");
            $(this).css("filter","opacity(100%)")
        }        
   });


   //アイコンホバー
   $(".play_job_icon").hover(function(){
       if($(this).attr("data-stat") == "on"){
           //オンの時　のる
            $(this).css("filter","brightness(200%) opacity(100%)");
       }else{
           //オフの時　のる
            $(this).css("filter","brightness(200%) opacity(20%)");
       }
        
   },
   function(){
       if($(this).attr("data-stat") == "on"){
            //オンの時　はなれる
            $(this).css("filter","brightness(100%) opacity(100%)");
       }else{
            //オフの時　はなれる
            $(this).css("filter","brightness(100%) opacity(20%)");
       }
        
   });


   //アイコンホバー 見出し
   //アイコンホバー 見出し
   $(".filter_play_job_menu_div_titletank").hover(function(){
        //オンの時　のる
        $(this).css("background-color","rgb(47, 0, 255)");
   },
   function(){
        //オンの時　はなれる
        $(this).css("background-color","rgb(25, 0, 134)");
       }        
   );

   $(".filter_play_job_menu_div_titlehealer").hover(function(){
    //オンの時　のる
        $(this).css("background-color","rgb(0, 155, 46)");
    },
    function(){
        //オンの時　はなれる
        $(this).css("background-color","rgb(0, 116, 35)");
       }        
    );

    $(".filter_play_job_menu_div_titledps").hover(function(){
    //オンの時　のる
        $(this).css("background-color","rgb(255, 0, 0)");
    },
    function(){
        //オンの時　はなれる
        $(this).css("background-color","rgb(141, 0, 0)");
       }        
    );
    
    $(".filter_play_job_menu_div_titlemelee,.filter_play_job_menu_div_titlerange,.filter_play_job_menu_div_titlecaster").hover(function(){
    //オンの時　のる
        $(this).css("background-color","rgba(255, 0, 0)");
    },
    function(){
        //オンの時　はなれる
        $(this).css("background-color","rgba(128, 0, 0, 0.5)");
       }        
    );

    $(".filter_play_job_menu_all_button_active_button").hover(function(){
    //オンの時　のる
        $(this).css("background-color","rgb(255, 0, 0)");
    },
    function(){
        //オンの時　はなれる
        $(this).css("background-color","rgba(255, 0, 0, 0.25)");
       }        
    );

    $(".filter_play_job_menu_all_button_inactive_button").hover(function(){
    //オンの時　のる
        $(this).css("background-color","rgba(4, 0, 255)");
    },
    function(){
        //オンの時　はなれる
        $(this).css("background-color","rgba(4, 0, 255, 0.25)");
       }        
    );

    $(".filter_play_job_menu_enter_button").hover(function(){
    //オンの時　のる
        $(this).css("background-color","rgb(255, 255, 255)");
    },
    function(){
        //オンの時　はなれる
        $(this).css("background-color","rgba(255, 255, 255, 0.377)");
       }        
    );



   
    //存在するかどうか確認と削除
    function JobListScrutiny(jobdata)
    {
        //存在する
        if($.inArray(jobdata,filter_play_job)>-1)
        {
            DeleteJobList(jobdata);
            return true;

        //存在しない
        }else{
            AddJobList(jobdata);
            return false;
        }
    }


    //見出しクリック時のアクション
    $(".filter_play_job_menu_div_titletank").click(function(){
        var JobList = ["paladin","warrior","darkknight","gunbreaker"];
        HClickAction(JobList,0);
    });

    $(".filter_play_job_menu_div_titlehealer").click(function(){
        var JobList = ["whitemage","scholar","astrologian","sage"];
        HClickAction(JobList,0);
    });

    $(".filter_play_job_menu_div_titledps").click(function(){
        var JobList =  ["monk","dragoon","ninja","samurai","reaper","bard","machinist","dancer","blackmage","summoner","redmage","bluemage"];
        HClickAction(JobList,0);
    });

    $(".filter_play_job_menu_div_titlemelee").click(function(){
        var JobList = ["monk","dragoon","ninja","samurai","reaper"];
        HClickAction(JobList,0);
    });

    $(".filter_play_job_menu_div_titlerange").click(function(){
        var JobList = ["bard","machinist","dancer",];
        HClickAction(JobList,0);
    });

    $(".filter_play_job_menu_div_titlecaster").click(function(){
        var JobList = ["blackmage","summoner","redmage","bluemage"];
        HClickAction(JobList,0);
    });

    $(".filter_play_job_menu_all_button_active_button").click(function(){
        var JobList = ["paladin","warrior","darkknight","gunbreaker","monk","dragoon","ninja","samurai","reaper","whitemage","scholar","astrologian","sage","bard","machinist","dancer","blackmage","summoner","redmage","bluemage"];
        HClickAction(JobList,1);
    });

    $(".filter_play_job_menu_all_button_inactive_button").click(function(){
        var JobList = ["paladin","warrior","darkknight","gunbreaker","monk","dragoon","ninja","samurai","reaper","whitemage","scholar","astrologian","sage","bard","machinist","dancer","blackmage","summoner","redmage","bluemage"];
        HClickAction(JobList,2);
    });

    $(".filter_play_job_menu_enter_button div").click(function(){
        //ajax
        AjaxMenuClick();
        $(".filter_play_job_menu > div").slideUp(100);
    });



    //見出しクリックの動作関数
    function HClickAction(JobList,allFlag){

        var existCount = 0;
        var existJob = [];
        var notExistJob = [];
        
        JobList.forEach(job => {
            if(JobListScrutinyArray(job))
            {
                existJob.push(job);
                existCount++
            }else
            {                
                notExistJob.push(job);
            }            
        });

        //全て〇〇の場合
        if(allFlag == 1)
        {
            //notExistJobをオンにする
            AddJobList(notExistJob);
            JobIconChange(notExistJob);
            return 0;
        }else if(allFlag == 2){
            //existJobをオフにする
            DeleteJobList(existJob);
            JobIconChange(existJob);
            return 0;
        }



        if(existCount == 0)
        {
            //全部オンにする
            AddJobList(JobList);
            JobIconChange(JobList);

        }else if(existCount == JobList.length)
        {
            //全部オフにする
            DeleteJobList(JobList);
            JobIconChange(JobList);

        }else
        {
            //notExistJobをオンにする
            AddJobList(notExistJob);
            JobIconChange(notExistJob);
        }

    };

    
    //存在するかどうか(配列)
    function JobListScrutinyArray(jobdatas)
    {
        //存在する
        if($.inArray(jobdatas,filter_play_job)>-1)
        {
            return true;

        //存在しない
        }else{
            return false;
        }

    }

    //配列を受け取って、アイコンを　オン⇔オフにする
    function JobIconChange(joblist)
    {
        joblist.forEach(job => {
            //スペースを削除
            job = job.replace(/ /g, "");

            //オンの時　オフにする
            if($("[data-job="+job+"]").attr("data-stat") == "on"){
                $("[data-job="+job+"]").attr("data-stat","off");
                $("[data-job="+job+"]").css("filter","brightness(100%) opacity(20%)");
            }else{
            //オフの時　オンにする
                $("[data-job="+job+"]").attr("data-stat","on");
                $("[data-job="+job+"]").css("filter","brightness(100%) opacity(100%)");
            }
            
        });
    }




    //ソート：再生回数
    $("#sort_view_count").click(function(){
        
        //ソートステータスを１つ進める
        sort_view_count = sortButtonCheck(sort_view_count);
        
        //表示の変更
        switch(sort_view_count)
        {            
            case "DESC":
                $(this).text("再生回数：多い");
                $(this).css("background-color","rgb(165, 42, 42)");
                break;

            case "ASC":
                $(this).text("再生回数：少い");
                $(this).css("background-color","rgb(42, 50, 165)");
                break;            
        }

        //ほかのソートを調整        
        sort_published_at = "NONE";
        $("#sort_published_at").text("投稿日");
        $("#sort_published_at").css("background-color","#444444");


        //ajax
        AjaxMenuClick();
    
    });
    
    //ソート：投稿日
    $("#sort_published_at").click(function(){

        sort_published_at = sortButtonCheck(sort_published_at);

        switch(sort_published_at)
        {            
            case "DESC":
                $(this).text("投稿日：新しい");
                $(this).css("background-color","rgb(165, 42, 42)");
                break;

            case "ASC":
                $(this).text("投稿日：古い");
                $(this).css("background-color","rgb(42, 50, 165)");
                break;            
        }

        sort_view_count = "NONE";
        $("#sort_view_count").text("再生回数");
        $("#sort_view_count").css("background-color","#444444");

        //ajax
        AjaxMenuClick();

    });

    //フィルター：ボイスチャット
    $("#filter_bool_vc").click(function(){

        filter_bool_vc = filterButtonCheckBool(filter_bool_vc);

        switch(filter_bool_vc)
        {            
            case "NONE":
                $(this).text("VC:ALL");
                $(this).css("background-color","#444444");
                break;

            case "true":
                $(this).text("VC:あり");
                $(this).css("background-color","rgb(165, 42, 42)");
                break;
                
            case "false":
                $(this).text("VC:なし");
                $(this).css("background-color","rgb(42, 50, 165)");
                break;
        }

        //ajax
        AjaxMenuClick();

    });

    //フィルター：DPS表示
    $("#filter_bool_act").click(function(){

        filter_bool_act = filterButtonCheckBool(filter_bool_act);

        switch(filter_bool_act)
        {            
            case "NONE":
                $(this).text("DPS表示:ALL");
                $(this).css("background-color","#444444");
                break;

            case "true":
                $(this).text("DPS表示:あり");
                $(this).css("background-color","rgb(165, 42, 42)");
                break;
                
            case "false":
                $(this).text("DPS表示:なし");
                $(this).css("background-color","rgb(42, 50, 165)");
                break;
        }

        //ajax
        AjaxMenuClick();

    });

    //フィルター：クリアー
    $("#filter_bool_clear").click(function(){

        filter_bool_clear = filterButtonCheckBool(filter_bool_clear);

        switch(filter_bool_clear)
        {            
            case "NONE":
                $(this).text("クリアー:ALL");
                $(this).css("background-color","#444444");
                break;

            case "true":
                $(this).text("クリアー:踏破");
                $(this).css("background-color","rgb(165, 42, 42)");
                break;
                
            case "false":
                $(this).text("クリアー:未クリア");
                $(this).css("background-color","rgb(42, 50, 165)");
                break;
        }

        //ajax
        AjaxMenuClick();

    });


    //フィルター：解説
    $(document).on('click',function(e) {
        if(!$(e.target).closest('#filter_string_guide').length) {
          // ターゲット要素の外側をクリックした時の操作
          $(".filter_string_guide_menu ul").slideUp(100);
        } else {
          // ターゲット要素をクリックした時の操作
          $(".filter_string_guide_menu ul").slideDown(100);
        }
     });

    //小メニュークリック時の動作
    $(".filter_string_guide_menu li").click(function(){
        var clickButtonValue = $(this).attr("data-value");
        $("#filter_string_guide").text("解説:"+clickButtonValue);

        switch(clickButtonValue)
        {
            case "ALL":
                $("#filter_string_guide").css("background-color","#444444");
                filter_string_guide = "NONE"
                break;
            
            case "ゆっくり":
                $("#filter_string_guide").css("background-color","rgb(165, 42, 42)");
                filter_string_guide = "yukkuri"
                break;
            
            case "本人":
                $("#filter_string_guide").css("background-color","rgb(165, 42, 42)");
                filter_string_guide = "jigoe"
                break;

            case "字幕":
                $("#filter_string_guide").css("background-color","rgb(165, 42, 42)");
                filter_string_guide = "jimaku"
                break;

            case "なし":
                $("#filter_string_guide").css("background-color","rgb(42, 50, 165)");
                filter_string_guide = "nonevoice"
                break            
        }

        //ajax
        AjaxMenuClick();

    })

    //小メニューアニメーション
    $(".filter_string_guide_menu li").hover(function(){        
        var index = $(".filter_string_guide_menu li").index(this);
            if(index == 0)
            {
                $(this).animate(
                    {
                      'backgroundColor': '#636363'
                    }, 70
                  );
            }else if(index == 4)
            {
                $(this).animate(
                    {
                      'backgroundColor': 'rgb(42, 50, 165)'
                    }, 70
                  );
            }else{
                $(this).animate(
                    {
                      'backgroundColor': 'rgb(165, 42, 42)'
                    }, 70
                  );
            }
    },
    function(){
        $(this).animate(
            {
                'backgroundColor': '#444444'
            }, 70
        );
    });


    //フィルター：言語
    $("#filter_language").click(function(){

        filter_language = filterButtonCheckBool(filter_language);

        switch(filter_language)
        {            
            case "NONE":
                $(this).text("言語:ALL");
                $(this).css("background-color","#444444");
                break;

            case "true":
                $(this).text("言語:日本語");
                $(this).css("background-color","rgb(165, 42, 42)");
                break;
                
            case "false":
                $(this).text("言語:ENGLISH");
                $(this).css("background-color","rgb(42, 50, 165)");
                break;
        }

        //ajax
        AjaxMenuClick();

    });


    //フィルタークリアー
    $("#filter_delete").click(function(){
        filter_bool_vc = "NONE";
        filter_play_job = filter_play_job = ["paladin","warrior","darkknight","gunbreaker","monk","dragoon","ninja","samurai","reaper","whitemage","scholar","astrologian","sage","bard","machinist","dancer","blackmage","summoner","redmage","bluemage","NONE"];
        filter_string_guide = "NONE";
        filter_bool_clear = "NONE";
        filter_bool_act = "NONE";
        filter_language = "NONE";

        $("#filter_bool_vc").text("VC:ALL");
        $("#filter_bool_vc").css("background-color","#444444");
        $("#filter_string_guide").text("解説:ALL");
        $("#filter_string_guide").css("background-color","#444444");
        $("#filter_bool_act").text("DPS表示:ALL");
        $("#filter_bool_act").css("background-color","#444444");
        $("#filter_bool_clear").text("クリアー:ALL");
        $("#filter_bool_clear").css("background-color","#444444");
        $("#filter_language").text("言語:ALL");
        $("#filter_language").css("background-color","#444444");
        $(".play_job_icon").attr("data-stat","on");
        $(".play_job_icon").css("filter","opacity(100%)");

        //ajax
        AjaxMenuClick();
    })



    //ボタンの状態を逆にする
    function sortButtonCheck(sort_)
    {
        if(sort_ == "NONE")
        {
            sort_ = "DESC";
        }else if(sort_ == "DESC")
        {
            sort_ = "ASC";
        }else
        {
            sort_ = "DESC";
        }
        return sort_;
    }
    

    //ボタンの状態を変更する
    function filterButtonCheckBool(filter_)
    {
        if(filter_ == "NONE")
        {
            filter_ = "true";
        }else if(filter_ == "true")
        {
            filter_ = "false";
        }else
        {
            filter_ = "NONE";
        }
        return filter_;
    }



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

    //最初のソートの色を調整
    $("#sort_view_count").css("background-color","rgb(165, 42, 42)");


    //ローカルストレージの内容を読み込む
    if(localStorage["sort_view_count"] != null){
        sort_view_count = localStorage["sort_view_count"];
    }
    if(localStorage["sort_published_at"] != null){
        sort_published_at = localStorage["sort_published_at"];
    }
    if(localStorage["filter_bool_vc"] != null){
        filter_bool_vc = localStorage["filter_bool_vc"];
    }
    if(localStorage["filter_string_guide"] != null){
        filter_string_guide = localStorage["filter_string_guide"];
    }
    if(localStorage["filter_bool_clear"] != null){
        filter_bool_clear = localStorage["filter_bool_clear"];
    }
    if(localStorage["filter_bool_act"] != null){
        filter_bool_act = localStorage["filter_bool_act"];
    }
    if(localStorage["filter_language"] != null){
        filter_language = localStorage["filter_language"];
    }if(localStorage["filter_play_job"] != null){
        filter_play_job_json = localStorage["filter_play_job"];
        filter_play_job = JSON.parse(filter_play_job_json);
    }
    

    //ajax
    AjaxMenuClick();
    
    
});