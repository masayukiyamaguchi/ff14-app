$(function() {

    // 種族の色判別、変更
    var gender = $(".char_gender").text();
    if(gender == "♂"){
      $(".char_gender").css("color","rgb(56, 109, 255)");
    }

    // カンストジョブのレベル色
    if($('.job_level_gladiator').text()=='0'){$('.job_level_gladiator').text('－');}else if(Number($('.job_level_gladiator').text())<=9 && Number($('.job_level_gladiator').text())>0){$('.job_level_gladiator').css('left','+=5');}else if($('.job_level_paladin').text()=='80'){$('.job_level_paladin').css('color','#ee852e');}
    if($('.job_level_marauder').text()=='0'){$('.job_level_marauder').text('－');}else if(Number($('.job_level_marauder').text())<=9 && Number($('.job_level_marauder').text())>0){$('.job_level_marauder').css('left','+=5');}else if($('.job_level_warrior').text()=='80'){$('.job_level_warrior').css('color','#ee852e');}
    if($('.job_level_darkknight').text()=='0'){$('.job_level_darkknight').text('－');}else if(Number($('.job_level_darkknight').text())<=9 && Number($('.job_level_darkknight').text())>0){$('.job_level_darkknight').css('left','+=5');}else if($('.job_level_darkknight').text()=='80'){$('.job_level_darkknight').css('color','#ee852e');}
    if($('.job_level_gunbreaker').text()=='0'){$('.job_level_gunbreaker').text('－');}else if(Number($('.job_level_gunbreaker').text())<=9 && Number($('.job_level_gunbreaker').text())>0){$('.job_level_gunbreaker').css('left','+=5');}else if($('.job_level_gunbreaker').text()=='80'){$('.job_level_gunbreaker').css('color','#ee852e');}
    if($('.job_level_pugilist').text()=='0'){$('.job_level_pugilist').text('－');}else if(Number($('.job_level_pugilist').text())<=9 && Number($('.job_level_pugilist').text())>0){$('.job_level_pugilist').css('left','+=5');}else if($('.job_level_monk').text()=='80'){$('.job_level_monk').css('color','#ee852e');}
    if($('.job_level_lancer').text()=='0'){$('.job_level_lancer').text('－');}else if(Number($('.job_level_lancer').text())<=9 && Number($('.job_level_lancer').text())>0){$('.job_level_lancer').css('left','+=5');}else if($('.job_level_dragoon').text()=='80'){$('.job_level_dragoon').css('color','#ee852e');}
    if($('.job_level_rogue').text()=='0'){$('.job_level_rogue').text('－');}else if(Number($('.job_level_rogue').text())<=9 && Number($('.job_level_rogue').text())>0){$('.job_level_rogue').css('left','+=5');}else if($('.job_level_ninja').text()=='80'){$('.job_level_ninja').css('color','#ee852e');}
    if($('.job_level_samurai').text()=='0'){$('.job_level_samurai').text('－');}else if(Number($('.job_level_samurai').text())<=9 && Number($('.job_level_samurai').text())>0){$('.job_level_samurai').css('left','+=5');}else if($('.job_level_samurai').text()=='80'){$('.job_level_samurai').css('color','#ee852e');}
    if($('.job_level_conjurer').text()=='0'){$('.job_level_conjurer').text('－');}else if(Number($('.job_level_conjurer').text())<=9 && Number($('.job_level_conjurer').text())>0){$('.job_level_conjurer').css('left','+=5');}else if($('.job_level_whitemage').text()=='80'){$('.job_level_whitemage').css('color','#ee852e');}
    if($('.job_level_scholar').text()=='0'){$('.job_level_scholar').text('－');}else if(Number($('.job_level_scholar').text())<=9 && Number($('.job_level_scholar').text())>0){$('.job_level_scholar').css('left','+=5');}else if($('.job_level_scholar').text()=='80'){$('.job_level_scholar').css('color','#ee852e');}
    if($('.job_level_astrologian').text()=='0'){$('.job_level_astrologian').text('－');}else if(Number($('.job_level_astrologian').text())<=9 && Number($('.job_level_astrologian').text())>0){$('.job_level_astrologian').css('left','+=5');}else if($('.job_level_astrologian').text()=='80'){$('.job_level_astrologian').css('color','#ee852e');}
    if($('.job_level_archer').text()=='0'){$('.job_level_archer').text('－');}else if(Number($('.job_level_archer').text())<=9 && Number($('.job_level_archer').text())>0){$('.job_level_archer').css('left','+=5');}else if($('.job_level_bard').text()=='80'){$('.job_level_bard').css('color','#ee852e');}
    if($('.job_level_machinist').text()=='0'){$('.job_level_machinist').text('－');}else if(Number($('.job_level_machinist').text())<=9 && Number($('.job_level_machinist').text())>0){$('.job_level_machinist').css('left','+=5');}else if($('.job_level_machinist').text()=='80'){$('.job_level_machinist').css('color','#ee852e');}
    if($('.job_level_dancer').text()=='0'){$('.job_level_dancer').text('－');}else if(Number($('.job_level_dancer').text())<=9 && Number($('.job_level_dancer').text())>0){$('.job_level_dancer').css('left','+=5');}else if($('.job_level_dancer').text()=='80'){$('.job_level_dancer').css('color','#ee852e');}
    if($('.job_level_thaumaturge').text()=='0'){$('.job_level_thaumaturge').text('－');}else if(Number($('.job_level_thaumaturge').text())<=9 && Number($('.job_level_thaumaturge').text())>0){$('.job_level_thaumaturge').css('left','+=5');}else if($('.job_level_blackmage').text()=='80'){$('.job_level_blackmage').css('color','#ee852e');}
    if($('.job_level_arcanist').text()=='0'){$('.job_level_arcanist').text('－');}else if(Number($('.job_level_arcanist').text())<=9 && Number($('.job_level_arcanist').text())>0){$('.job_level_arcanist').css('left','+=5');}else if($('.job_level_summoner').text()=='80'){$('.job_level_summoner').css('color','#ee852e');}
    if($('.job_level_redmage').text()=='0'){$('.job_level_redmage').text('－');}else if(Number($('.job_level_redmage').text())<=9 && Number($('.job_level_redmage').text())>0){$('.job_level_redmage').css('left','+=5');}else if($('.job_level_redmage').text()=='80'){$('.job_level_redmage').css('color','#ee852e');}
    if($('.job_level_bluemage').text()=='0'){$('.job_level_bluemage').text('－');}else if(Number($('.job_level_bluemage').text())<=9 && Number($('.job_level_bluemage').text())>0){$('.job_level_bluemage').css('left','+=5');}else if($('.job_level_bluemage').text()=='70'){$('.job_level_bluemage').css('color','#ee852e');}
    if($('.job_level_carpenter').text()=='0'){$('.job_level_carpenter').text('－');}else if(Number($('.job_level_carpenter').text())<=9 && Number($('.job_level_carpenter').text())>0){$('.job_level_carpenter').css('left','+=5');}else if($('.job_level_carpenter').text()=='80'){$('.job_level_carpenter').css('color','#ee852e');}
    if($('.job_level_blacksmith').text()=='0'){$('.job_level_blacksmith').text('－');}else if(Number($('.job_level_blacksmith').text())<=9 && Number($('.job_level_blacksmith').text())>0){$('.job_level_blacksmith').css('left','+=5');}else if($('.job_level_blacksmith').text()=='80'){$('.job_level_blacksmith').css('color','#ee852e');}
    if($('.job_level_armorer').text()=='0'){$('.job_level_armorer').text('－');}else if(Number($('.job_level_armorer').text())<=9 && Number($('.job_level_armorer').text())>0){$('.job_level_armorer').css('left','+=5');}else if($('.job_level_armorer').text()=='80'){$('.job_level_armorer').css('color','#ee852e');}
    if($('.job_level_goldsmith').text()=='0'){$('.job_level_goldsmith').text('－');}else if(Number($('.job_level_goldsmith').text())<=9 && Number($('.job_level_goldsmith').text())>0){$('.job_level_goldsmith').css('left','+=5');}else if($('.job_level_goldsmith').text()=='80'){$('.job_level_goldsmith').css('color','#ee852e');}
    if($('.job_level_leatherworker').text()=='0'){$('.job_level_leatherworker').text('－');}else if(Number($('.job_level_leatherworker').text())<=9 && Number($('.job_level_leatherworker').text())>0){$('.job_level_leatherworker').css('left','+=5');}else if($('.job_level_leatherworker').text()=='80'){$('.job_level_leatherworker').css('color','#ee852e');}
    if($('.job_level_weaver').text()=='0'){$('.job_level_weaver').text('－');}else if(Number($('.job_level_weaver').text())<=9 && Number($('.job_level_weaver').text())>0){$('.job_level_weaver').css('left','+=5');}else if($('.job_level_weaver').text()=='80'){$('.job_level_weaver').css('color','#ee852e');}
    if($('.job_level_alchemist').text()=='0'){$('.job_level_alchemist').text('－');}else if(Number($('.job_level_alchemist').text())<=9 && Number($('.job_level_alchemist').text())>0){$('.job_level_alchemist').css('left','+=5');}else if($('.job_level_alchemist').text()=='80'){$('.job_level_alchemist').css('color','#ee852e');}
    if($('.job_level_culinarian').text()=='0'){$('.job_level_culinarian').text('－');}else if(Number($('.job_level_culinarian').text())<=9 && Number($('.job_level_culinarian').text())>0){$('.job_level_culinarian').css('left','+=5');}else if($('.job_level_culinarian').text()=='80'){$('.job_level_culinarian').css('color','#ee852e');}
    if($('.job_level_miner').text()=='0'){$('.job_level_miner').text('－');}else if(Number($('.job_level_miner').text())<=9 && Number($('.job_level_miner').text())>0){$('.job_level_miner').css('left','+=5');}else if($('.job_level_miner').text()=='80'){$('.job_level_miner').css('color','#ee852e');}
    if($('.job_level_botanist').text()=='0'){$('.job_level_botanist').text('－');}else if(Number($('.job_level_botanist').text())<=9 && Number($('.job_level_botanist').text())>0){$('.job_level_botanist').css('left','+=5');}else if($('.job_level_botanist').text()=='80'){$('.job_level_botanist').css('color','#ee852e');}
    if($('.job_level_fisher').text()=='0'){$('.job_level_fisher').text('－');}else if(Number($('.job_level_fisher').text())<=9 && Number($('.job_level_fisher').text())>0){$('.job_level_fisher').css('left','+=5');}else if($('.job_level_fisher').text()=='80'){$('.job_level_fisher').css('color','#ee852e');}



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

  });

});