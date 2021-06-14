$(function() {

    $(".img_button").change(function(e){
        //ファイルオブジェクトを取得する
        var file = e.target.files[0];
        var reader = new FileReader();
     
        //アップロードした画像を設定する
        reader.onload = (function(file){
          return function(e){
            $(".img_preview").attr("src", e.target.result);
            $(".img_preview").attr("title", file.name);
          };
        })(file);
        reader.readAsDataURL(file);     
    });



});