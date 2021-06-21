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

    $("#camvas_button").click(function(){
      html2canvas(document.querySelector("#camvas"), {
      width: 960,
      height: 540
      }).then(canvas => {
        canvas.toBlob(blob => {
          $("#download").attr("download", `${document.title}.png`).attr("href", window.URL.createObjectURL(blob));
          $('a#download')[0].click();
      })
      })

    });

    // キャラ名
    // フォント
    $("[name=char_name_radio]").click(function(){
      if($('input[name=char_name_radio]:eq(0)').prop('checked')){
         $('input[name=char_name_radio]:eq(0)').prop('checked', true);
         $(".char_name").css("font-family","'Alice', serif");

      }else if($('input[name=char_name_radio]:eq(1)').prop('checked')){
        $('input[name=char_name_radio]:eq(1)').prop('checked', true);
        $(".char_name").css("font-family","'Bungee Inline', cursive");

      }else if($('input[name=char_name_radio]:eq(2)').prop('checked')){
        $('input[name=char_name_radio]:eq(2)').prop('checked', true);
        $(".char_name").css("font-family","'Elsie Swash Caps', cursive");

      }else if($('input[name=char_name_radio]:eq(3)').prop('checked')){
        $('input[name=char_name_radio]:eq(3)').prop('checked', true);
        $(".char_name").css("font-family","'IM Fell English', serif");

      }else if($('input[name=char_name_radio]:eq(4)').prop('checked')){
        $('input[name=char_name_radio]:eq(4)').prop('checked', true);
        $(".char_name").css("font-family","'Kalam', cursive");

      }else if($('input[name=char_name_radio]:eq(5)').prop('checked')){
        $('input[name=char_name_radio]:eq(5)').prop('checked', true);
        $(".char_name").css("font-family","'Leckerli One', cursive");

      }else if($('input[name=char_name_radio]:eq(6)').prop('checked')){
        $('input[name=char_name_radio]:eq(6)').prop('checked', true);
        $(".char_name").css("font-family","'Metamorphous', cursive");

      }else if($('input[name=char_name_radio]:eq(7)').prop('checked')){
        $('input[name=char_name_radio]:eq(7)').prop('checked', true);
        $(".char_name").css("font-family","'Noto Sans JP', sans-serif");

      }else if($('input[name=char_name_radio]:eq(8)').prop('checked')){
        $('input[name=char_name_radio]:eq(8)').prop('checked', true);
        $(".char_name").css("font-family","'Nunito', sans-serif");

      }else if($('input[name=char_name_radio]:eq(9)').prop('checked')){
        $('input[name=char_name_radio]:eq(9)').prop('checked', true);
        $(".char_name").css("font-family","'Righteous', cursive");

      }else if($('input[name=char_name_radio]:eq(10)').prop('checked')){
        $('input[name=char_name_radio]:eq(10)').prop('checked', true);
        $(".char_name").css("font-family","'Rock Salt', cursive");

      }else if($('input[name=char_name_radio]:eq(11)').prop('checked')){
        $('input[name=char_name_radio]:eq(11)').prop('checked', true);
        $(".char_name").css("font-family","'Sacramento', cursive");

      }else if($('input[name=char_name_radio]:eq(12)').prop('checked')){
        $('input[name=char_name_radio]:eq(12)').prop('checked', true);
        $(".char_name").css("font-family","'Sorts Mill Goudy', serif");

      }
      
    });

    // 大きさ
    $("#wkSlider2").slider({
      max:200, //最大値
      min: 0, //最小値
      value: 50, //初期値
      step: 1, //幅
   
      slide: function( event, ui ) {
        $("#wkValue").html(ui.value);
        num = $(this).slider( "value" )/50;
        $(".char_name").css("font-size",35*num+"px")
      },
      create: function( event, ui ) {
        $("#wkValue").html($(this).slider( "value" ));
      },
      change: function( event, ui ) {
        $("#wkValue").html(ui.value);
      }
    });

    // 色
    $('#colorPicker').on('change', function(e){
      // 選択した色の情報を取得
      var color = e.detail[0];
      $(this).val(color);
      // rgbにして1つ1つのデータで解析
      var color_rgb = hex2rgb(color); 
      // 透明度を取得
      num = $("#transparent_value").text();
      $(".char_name").css("color","rgba("+color_rgb[0]+","+color_rgb[1]+","+color_rgb[2]+","+num*0.01+")");      
      $("#colorPicker_color").html(color);
    });

    // 透明度
    $("#transparent_value2").slider({
      max:100, //最大値
      min: 0, //最小値
      value: 100, //初期値
      step: 1, //幅
   
      // スライドしたとき
      slide: function( event, ui ) {
        $("#transparent_value").html(ui.value);
        var num = $(this).slider( "value" );
        // 現在の色を取得
        var name_color = $(".char_name").css("color");
        // rgbの1つ1つの色を解析し、透明度をプラスして表示
        rgb = rgb2hex(name_color);
        $(".char_name").css("color","rgba("+rgb[1]+","+rgb[2]+","+rgb[3]+","+num*0.01+")");
      },
      create: function( event, ui ) {
        $("#transparent_value").html($(this).slider( "value" ));
      },
      change: function( event, ui ) {
        $("#transparent_value").html(ui.value);
      }

    });

    // hex to rgb
    function hex2rgb ( hex ) {
      if ( hex.slice(0, 1) == "#" ) hex = hex.slice(1) ;
      if ( hex.length == 3 ) hex = hex.slice(0,1) + hex.slice(0,1) + hex.slice(1,2) + hex.slice(1,2) + hex.slice(2,3) + hex.slice(2,3) ;
      return [ hex.slice( 0, 2 ), hex.slice( 2, 4 ), hex.slice( 4, 6 ) ].map( function ( str ) {
      return parseInt( str, 16 ) ;
      } ) ;
    }
    // rgb to hex 
    function rgb2hex(orig){
      var rgb = orig.replace(/\s/g,'').match(/^rgba?\((\d+),(\d+),(\d+)/i);
      return rgb;
     }
  
  
  //キャラ情
  // フォント
  $("[name=char_info_radio]").click(function(){
    console.log("test");
    if($('input[name=char_info_radio]:eq(0)').prop('checked')){
       $('input[name=char_info_radio]:eq(0)').prop('checked', true);
       $(".char_info").css("font-family","'Alice', serif");
    }else if($('input[name=char_info_radio]:eq(1)').prop('checked')){
      $('input[name=char_info_radio]:eq(1)').prop('checked', true);
      $(".char_info").css("font-family","'Bungee Inline', cursive");
    }else if($('input[name=char_info_radio]:eq(2)').prop('checked')){
      $('input[name=char_info_radio]:eq(2)').prop('checked', true);
      $(".char_info").css("font-family","'Elsie Swash Caps', cursive");
    }else if($('input[name=char_info_radio]:eq(3)').prop('checked')){
      $('input[name=char_info_radio]:eq(3)').prop('checked', true);
      $(".char_info").css("font-family","'IM Fell English', serif");
    }else if($('input[name=char_info_radio]:eq(4)').prop('checked')){
      $('input[name=char_info_radio]:eq(4)').prop('checked', true);
      $(".char_info").css("font-family","'Kalam', cursive");
    }else if($('input[name=char_info_radio]:eq(5)').prop('checked')){
      $('input[name=char_info_radio]:eq(5)').prop('checked', true);
      $(".char_info").css("font-family","'Leckerli One', cursive");
    }else if($('input[name=char_info_radio]:eq(6)').prop('checked')){
      $('input[name=char_info_radio]:eq(6)').prop('checked', true);
      $(".char_info").css("font-family","'Metamorphous', cursive");
    }else if($('input[name=char_info_radio]:eq(7)').prop('checked')){
      $('input[name=char_info_radio]:eq(7)').prop('checked', true);
      $(".char_info").css("font-family","'Noto Sans JP', sans-serif");
    }else if($('input[name=char_info_radio]:eq(8)').prop('checked')){
      $('input[name=char_info_radio]:eq(8)').prop('checked', true);
      $(".char_info").css("font-family","'Nunito', sans-serif");
    }else if($('input[name=char_info_radio]:eq(9)').prop('checked')){
      $('input[name=char_info_radio]:eq(9)').prop('checked', true);
      $(".char_info").css("font-family","'Righteous', cursive");
    }else if($('input[name=char_info_radio]:eq(10)').prop('checked')){
      $('input[name=char_info_radio]:eq(10)').prop('checked', true);
      $(".char_info").css("font-family","'Rock Salt', cursive");
    }else if($('input[name=char_info_radio]:eq(11)').prop('checked')){
      $('input[name=char_info_radio]:eq(11)').prop('checked', true);
      $(".char_info").css("font-family","'Sacramento', cursive");
    }else if($('input[name=char_info_radio]:eq(12)').prop('checked')){
      $('input[name=char_info_radio]:eq(12)').prop('checked', true);
      $(".char_info").css("font-family","'Sorts Mill Goudy', serif");
    }
    
  });

  // 見出し色
  $('#char_info_h').on('change', function(e){
    // 選択した色の情報を取得
    var color = e.detail[0];
    $(this).val(color);
    $(".char_main_job").css("color",color);
    $(".char_server").css("color",color);
    $(".char_race").css("color",color);
    $(".char_freecompany").css("color",color);     
    $("#char_info_h_span").html(color);
  });
  // テキスト色
  $('#char_text_h').on('change', function(e){
    // 選択した色の情報を取得
    var color = e.detail[0];
    $(this).val(color);
    $(".char_main_name").css("color",color);
    $(".char_server_name").css("color",color);
    $(".char_race_name").css("color",color);
    $(".char_tribe_name").css("color",color);
    $(".char_freecompany_name").css("color",color);       
    $("#char_text_h_span").html(color);
  });

  // ドラッグ要素付与
  $(".dragg").draggable({
    containment:"#dragArea"
  });



});