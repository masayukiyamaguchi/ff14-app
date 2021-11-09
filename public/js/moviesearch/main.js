$(function() {

    var leftMenuColor = "rgb(24, 24, 24)";
    var leftMenuColrOnMouse = "rgb(56, 56, 56)";
    var mainContentsColor = "rgb(33, 33, 33)";

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
            $(this).css("background-color",leftMenuColor);
    });
    
   
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

    //初回実行

    //最初のメニューは開いておく
    var nowVarsitonName = $(".mainContents_container_left div:first-child").attr("id");
    ChangeDisplayCss("#"+nowVarsitonName+" .left_menu_h2"); 
    $(".left_menu_ul").first().css("display","block");

    
});