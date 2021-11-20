$(function() {


//開幕実行
var dataContents = localStorage["dataContents"];
var sort_view_count = localStorage["sort_view_count"];
var sort_published_at = localStorage["sort_published_at"];
var filter_bool_vc = localStorage["filter_bool_vc"];
var filter_string_guide = localStorage["filter_string_guide"];
var filter_bool_clear = localStorage["filter_bool_clear"];
var filter_bool_act = localStorage["filter_bool_act"];
var filter_language = localStorage["filter_language"];
var filter_play_job_json = localStorage["filter_play_job"];
var filter_play_job = JSON.parse(filter_play_job_json);

AjaxFilterList();




//非同期処理
function AjaxFilterList()
{
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
       makeMovieList(data);

    })
    // Ajaxリクエスト失敗時の処理
    .fail(function(data) {
        alert('Ajaxリクエスト失敗');
    });
}


function makeMovieList(datas)
{
    var index = 1;

    datas.forEach(data => {    
    
    //コンテンツ生成
    $('.searchlist_contents').last().append('<a href="/moviesearch/'+data["movie_id"]+'/">');
    $('.searchlist_contents a').last().append('<div class="searchlist_contents_one">');
    
    $('.searchlist_contents_one').last().append('<div class="searchlist_contents_index">'+index+'</div>');
    $('.searchlist_contents_one').last().append('<div class="searchlist_contents_samenil">');
    $('.searchlist_contents_one').last().append('<div class="searchlist_contents_detail">');

    $('.searchlist_contents_detail').last().append('<div class="searchlist_contents_title">');
    $('.searchlist_contents_detail').last().append('<div class="searchlist_contents_channelname">');
    $('.searchlist_contents_detail').last().append('<div class="searchlist_contents_view_count">');

    $('.searchlist_contents_samenil').last().append('<img src='+data["samneil_img"]+' alt="">');

    $(".searchlist_contents_title").last().text(data["movie_title"]);
    $(".searchlist_contents_channelname").last().text(data["channel_name"]);
    $(".searchlist_contents_view_count").last().text(data["view_count_str"]+"・"+data["published_at_str"]);


    //再生中のものにチェックを入れる
    var nowUrl = $(location).attr('href');

    if(nowUrl.indexOf(data["movie_id"])>0)
    {
        $(".searchlist_contents_index").last().text("●");
        $(".searchlist_contents_index").last().css("color","red")
    }
    

    index++;


    });


}



















});