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
            $(this).next("ul").slideUp(200);

        //閉じてたら
        }else{
            
            $(".left_menu_ul").slideUp(200);
            $(this).next("ul").slideDown(200);
        }
    
    });






    
});