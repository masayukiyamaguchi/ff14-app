$(function() {

    var colorRed = "rgb(165, 42, 42)";
    var colorBlue = "rgb(42, 50, 165)";
    var colorGray = "#444444";

    var favorite_movie_array = ["NONE"];


//★マーククリック
$(document).on("click",".movie_list_favorite",function(){        
    favorite_movie_json = localStorage["favorite_movie"];
    if(favorite_movie_json == null){
        favorite_movie_array = ["NONE"];
    }else{
        favorite_movie_array = JSON.parse(favorite_movie_json);
    }
    //off
    if($(this).css("color") == "rgb(251, 255, 0)")
    {
        $(this).css("color","rgb(107, 107, 107)");
        var removals = [$(this).attr("data-id")];
        favorite_movie_array = favorite_movie_array.filter(function(v){
          return ! removals.includes(v);
        });
        $("#pop").text("★解除しました。");
        $("#pop").css("background-color",colorBlue);
    //on
    }else{
        $(this).css("color","rgb(251, 255, 0)");
        //バグ防止のため存在を確認
        if($.inArray($(this).attr("data-id"), favorite_movie_array)<0){
            favorite_movie_array.push($(this).attr("data-id"));
        };
        
        $("#pop").text("★追加しました！");
        $("#pop").css("background-color",colorRed);
    }
    //ストレージに保存
    favorite_movie_array.sort();
    favorite_movie_json = JSON.stringify(favorite_movie_array, undefined, 1);
    localStorage["favorite_movie"] =  favorite_movie_json;
});



//★hover
$(document).on("mouseenter", ".movie_list_favorite", function (eo) {
    $('body').append('<div id="pop">★お気に入りに追加します</div>');
    $('#pop').show();
    $(window).mousemove( function(e){
        var x = e.pageX;
        var y = e.pageY-40;
        $('#pop').css({left:x+'px',top:y+'px','z-index':'100'});
    });
});
$(document).on("mouseleave", ".movie_list_favorite", function (eo) {
    $('#pop').remove();
    $('#pop').remove();
    $('#pop').remove();
});


/* aタグpost */
$('#favoritelist a').on('click', function(){
    favorite_movie_json = localStorage["favorite_movie"];
    favorite_movie = $.parseJSON(favorite_movie_json);
    
    $("input[name='favorite_list']").val(favorite_movie);
    var pageURL = $(this).attr('href');
    $('form').attr('action',pageURL);
    $('form').submit();
    return false;
});












});





