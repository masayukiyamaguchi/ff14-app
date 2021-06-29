$(function() {

  // // ストレージの内容を反映  
  // var char_name_x = localStorage.getItem('char_name_x');
  // var char_name_y = localStorage.getItem('char_name_y');
  // $(".char_name").css("left",char_name_x+"px");
  // $(".char_name").css("top",char_name_y+"px");  

  // 種族の色判別、変更
  var gender = $(".char_gender").text();
  if(gender == "♂"){
    $(".char_gender").css("color","rgb(56, 109, 255)");
  }

  // カンストジョブのレベル色
    // ジョブレベルの色
    $('#job_icon_list_color').val("#ff5722");
    $('#job_icon_list_color_const').val("#000000");

  nomal = $('#job_icon_list_color_const').val();
  cunst = $('#job_icon_list_color').val();

  job_color_change(nomal,cunst);
  function job_color_change(nomal,counst){
    if($('.job_level_gladiator').text()=='0'){$('.job_level_gladiator').text('－').css('color',nomal);}else if(Number($('.job_level_gladiator').text())<=9 && Number($('.job_level_gladiator').text())>0){$('.job_level_gladiator').css('left','+=5').css('color',nomal);}else if($('.job_level_paladin').text()=='80'){$('.job_level_paladin').css('color',counst);}else{$('.job_level_paladin,.job_level_gladiator').css('color',nomal);}
    if($('.job_level_marauder').text()=='0'){$('.job_level_marauder').text('－').css('color',nomal);}else if(Number($('.job_level_marauder').text())<=9 && Number($('.job_level_marauder').text())>0){$('.job_level_marauder').css('left','+=5').css('color',nomal);}else if($('.job_level_warrior').text()=='80'){$('.job_level_warrior').css('color',counst);}else{$('.job_level_warrior,.job_level_marauder').css('color',nomal);}
    if($('.job_level_darkknight').text()=='0'){$('.job_level_darkknight').text('－').css('color',nomal);}else if(Number($('.job_level_darkknight').text())<=9 && Number($('.job_level_darkknight').text())>0){$('.job_level_darkknight').css('left','+=5').css('color',nomal);}else if($('.job_level_darkknight').text()=='80'){$('.job_level_darkknight').css('color',counst);}else{$('.job_level_darkknight,.job_level_darkknight').css('color',nomal);}
    if($('.job_level_gunbreaker').text()=='0'){$('.job_level_gunbreaker').text('－').css('color',nomal);}else if(Number($('.job_level_gunbreaker').text())<=9 && Number($('.job_level_gunbreaker').text())>0){$('.job_level_gunbreaker').css('left','+=5').css('color',nomal);}else if($('.job_level_gunbreaker').text()=='80'){$('.job_level_gunbreaker').css('color',counst);}else{$('.job_level_gunbreaker,.job_level_gunbreaker').css('color',nomal);}
    if($('.job_level_pugilist').text()=='0'){$('.job_level_pugilist').text('－').css('color',nomal);}else if(Number($('.job_level_pugilist').text())<=9 && Number($('.job_level_pugilist').text())>0){$('.job_level_pugilist').css('left','+=5').css('color',nomal);}else if($('.job_level_monk').text()=='80'){$('.job_level_monk').css('color',counst);}else{$('.job_level_monk,.job_level_pugilist').css('color',nomal);}
    if($('.job_level_lancer').text()=='0'){$('.job_level_lancer').text('－').css('color',nomal);}else if(Number($('.job_level_lancer').text())<=9 && Number($('.job_level_lancer').text())>0){$('.job_level_lancer').css('left','+=5').css('color',nomal);}else if($('.job_level_dragoon').text()=='80'){$('.job_level_dragoon').css('color',counst);}else{$('.job_level_dragoon,.job_level_lancer').css('color',nomal);}
    if($('.job_level_rogue').text()=='0'){$('.job_level_rogue').text('－').css('color',nomal);}else if(Number($('.job_level_rogue').text())<=9 && Number($('.job_level_rogue').text())>0){$('.job_level_rogue').css('left','+=5').css('color',nomal);}else if($('.job_level_ninja').text()=='80'){$('.job_level_ninja').css('color',counst);}else{$('.job_level_ninja,.job_level_rogue').css('color',nomal);}
    if($('.job_level_samurai').text()=='0'){$('.job_level_samurai').text('－').css('color',nomal);}else if(Number($('.job_level_samurai').text())<=9 && Number($('.job_level_samurai').text())>0){$('.job_level_samurai').css('left','+=5').css('color',nomal);}else if($('.job_level_samurai').text()=='80'){$('.job_level_samurai').css('color',counst);}else{$('.job_level_samurai,.job_level_samurai').css('color',nomal);}
    if($('.job_level_conjurer').text()=='0'){$('.job_level_conjurer').text('－').css('color',nomal);}else if(Number($('.job_level_conjurer').text())<=9 && Number($('.job_level_conjurer').text())>0){$('.job_level_conjurer').css('left','+=5').css('color',nomal);}else if($('.job_level_whitemage').text()=='80'){$('.job_level_whitemage').css('color',counst);}else{$('.job_level_whitemage,.job_level_conjurer').css('color',nomal);}
    if($('.job_level_scholar').text()=='0'){$('.job_level_scholar').text('－').css('color',nomal);}else if(Number($('.job_level_scholar').text())<=9 && Number($('.job_level_scholar').text())>0){$('.job_level_scholar').css('left','+=5').css('color',nomal);}else if($('.job_level_scholar').text()=='80'){$('.job_level_scholar').css('color',counst);}else{$('.job_level_scholar,.job_level_scholar').css('color',nomal);}
    if($('.job_level_astrologian').text()=='0'){$('.job_level_astrologian').text('－').css('color',nomal);}else if(Number($('.job_level_astrologian').text())<=9 && Number($('.job_level_astrologian').text())>0){$('.job_level_astrologian').css('left','+=5').css('color',nomal);}else if($('.job_level_astrologian').text()=='80'){$('.job_level_astrologian').css('color',counst);}else{$('.job_level_astrologian,.job_level_astrologian').css('color',nomal);}
    if($('.job_level_archer').text()=='0'){$('.job_level_archer').text('－').css('color',nomal);}else if(Number($('.job_level_archer').text())<=9 && Number($('.job_level_archer').text())>0){$('.job_level_archer').css('left','+=5').css('color',nomal);}else if($('.job_level_bard').text()=='80'){$('.job_level_bard').css('color',counst);}else{$('.job_level_bard,.job_level_archer').css('color',nomal);}
    if($('.job_level_machinist').text()=='0'){$('.job_level_machinist').text('－').css('color',nomal);}else if(Number($('.job_level_machinist').text())<=9 && Number($('.job_level_machinist').text())>0){$('.job_level_machinist').css('left','+=5').css('color',nomal);}else if($('.job_level_machinist').text()=='80'){$('.job_level_machinist').css('color',counst);}else{$('.job_level_machinist,.job_level_machinist').css('color',nomal);}
    if($('.job_level_dancer').text()=='0'){$('.job_level_dancer').text('－').css('color',nomal);}else if(Number($('.job_level_dancer').text())<=9 && Number($('.job_level_dancer').text())>0){$('.job_level_dancer').css('left','+=5').css('color',nomal);}else if($('.job_level_dancer').text()=='80'){$('.job_level_dancer').css('color',counst);}else{$('.job_level_dancer,.job_level_dancer').css('color',nomal);}
    if($('.job_level_thaumaturge').text()=='0'){$('.job_level_thaumaturge').text('－').css('color',nomal);}else if(Number($('.job_level_thaumaturge').text())<=9 && Number($('.job_level_thaumaturge').text())>0){$('.job_level_thaumaturge').css('left','+=5').css('color',nomal);}else if($('.job_level_blackmage').text()=='80'){$('.job_level_blackmage').css('color',counst);}else{$('.job_level_blackmage,.job_level_thaumaturge').css('color',nomal);}
    if($('.job_level_arcanist').text()=='0'){$('.job_level_arcanist').text('－').css('color',nomal);}else if(Number($('.job_level_arcanist').text())<=9 && Number($('.job_level_arcanist').text())>0){$('.job_level_arcanist').css('left','+=5').css('color',nomal);}else if($('.job_level_summoner').text()=='80'){$('.job_level_summoner').css('color',counst);}else{$('.job_level_summoner,.job_level_arcanist').css('color',nomal);}
    if($('.job_level_redmage').text()=='0'){$('.job_level_redmage').text('－').css('color',nomal);}else if(Number($('.job_level_redmage').text())<=9 && Number($('.job_level_redmage').text())>0){$('.job_level_redmage').css('left','+=5').css('color',nomal);}else if($('.job_level_redmage').text()=='80'){$('.job_level_redmage').css('color',counst);}else{$('.job_level_redmage,.job_level_redmage').css('color',nomal);}
    if($('.job_level_bluemage').text()=='0'){$('.job_level_bluemage').text('－').css('color',nomal);}else if(Number($('.job_level_bluemage').text())<=9 && Number($('.job_level_bluemage').text())>0){$('.job_level_bluemage').css('left','+=5').css('color',nomal);}else if($('.job_level_bluemage').text()=='70'){$('.job_level_bluemage').css('color',counst);}else{$('.job_level_bluemage,.job_level_bluemage').css('color',nomal);}
    if($('.job_level_carpenter').text()=='0'){$('.job_level_carpenter').text('－').css('color',nomal);}else if(Number($('.job_level_carpenter').text())<=9 && Number($('.job_level_carpenter').text())>0){$('.job_level_carpenter').css('left','+=5').css('color',nomal);}else if($('.job_level_carpenter').text()=='80'){$('.job_level_carpenter').css('color',counst);}else{$('.job_level_carpenter,.job_level_carpenter').css('color',nomal);}
    if($('.job_level_blacksmith').text()=='0'){$('.job_level_blacksmith').text('－').css('color',nomal);}else if(Number($('.job_level_blacksmith').text())<=9 && Number($('.job_level_blacksmith').text())>0){$('.job_level_blacksmith').css('left','+=5').css('color',nomal);}else if($('.job_level_blacksmith').text()=='80'){$('.job_level_blacksmith').css('color',counst);}else{$('.job_level_blacksmith,.job_level_blacksmith').css('color',nomal);}
    if($('.job_level_armorer').text()=='0'){$('.job_level_armorer').text('－').css('color',nomal);}else if(Number($('.job_level_armorer').text())<=9 && Number($('.job_level_armorer').text())>0){$('.job_level_armorer').css('left','+=5').css('color',nomal);}else if($('.job_level_armorer').text()=='80'){$('.job_level_armorer').css('color',counst);}else{$('.job_level_armorer,.job_level_armorer').css('color',nomal);}
    if($('.job_level_goldsmith').text()=='0'){$('.job_level_goldsmith').text('－').css('color',nomal);}else if(Number($('.job_level_goldsmith').text())<=9 && Number($('.job_level_goldsmith').text())>0){$('.job_level_goldsmith').css('left','+=5').css('color',nomal);}else if($('.job_level_goldsmith').text()=='80'){$('.job_level_goldsmith').css('color',counst);}else{$('.job_level_goldsmith,.job_level_goldsmith').css('color',nomal);}
    if($('.job_level_leatherworker').text()=='0'){$('.job_level_leatherworker').text('－').css('color',nomal);}else if(Number($('.job_level_leatherworker').text())<=9 && Number($('.job_level_leatherworker').text())>0){$('.job_level_leatherworker').css('left','+=5').css('color',nomal);}else if($('.job_level_leatherworker').text()=='80'){$('.job_level_leatherworker').css('color',counst);}else{$('.job_level_leatherworker,.job_level_leatherworker').css('color',nomal);}
    if($('.job_level_weaver').text()=='0'){$('.job_level_weaver').text('－').css('color',nomal);}else if(Number($('.job_level_weaver').text())<=9 && Number($('.job_level_weaver').text())>0){$('.job_level_weaver').css('left','+=5').css('color',nomal);}else if($('.job_level_weaver').text()=='80'){$('.job_level_weaver').css('color',counst);}else{$('.job_level_weaver,.job_level_weaver').css('color',nomal);}
    if($('.job_level_alchemist').text()=='0'){$('.job_level_alchemist').text('－').css('color',nomal);}else if(Number($('.job_level_alchemist').text())<=9 && Number($('.job_level_alchemist').text())>0){$('.job_level_alchemist').css('left','+=5').css('color',nomal);}else if($('.job_level_alchemist').text()=='80'){$('.job_level_alchemist').css('color',counst);}else{$('.job_level_alchemist,.job_level_alchemist').css('color',nomal);}
    if($('.job_level_culinarian').text()=='0'){$('.job_level_culinarian').text('－').css('color',nomal);}else if(Number($('.job_level_culinarian').text())<=9 && Number($('.job_level_culinarian').text())>0){$('.job_level_culinarian').css('left','+=5').css('color',nomal);}else if($('.job_level_culinarian').text()=='80'){$('.job_level_culinarian').css('color',counst);}else{$('.job_level_culinarian,.job_level_culinarian').css('color',nomal);}
    if($('.job_level_miner').text()=='0'){$('.job_level_miner').text('－').css('color',nomal);}else if(Number($('.job_level_miner').text())<=9 && Number($('.job_level_miner').text())>0){$('.job_level_miner').css('left','+=5').css('color',nomal);}else if($('.job_level_miner').text()=='80'){$('.job_level_miner').css('color',counst);}else{$('.job_level_miner,.job_level_miner').css('color',nomal);}
    if($('.job_level_botanist').text()=='0'){$('.job_level_botanist').text('－').css('color',nomal);}else if(Number($('.job_level_botanist').text())<=9 && Number($('.job_level_botanist').text())>0){$('.job_level_botanist').css('left','+=5').css('color',nomal);}else if($('.job_level_botanist').text()=='80'){$('.job_level_botanist').css('color',counst);}else{$('.job_level_botanist,.job_level_botanist').css('color',nomal);}
    if($('.job_level_fisher').text()=='0'){$('.job_level_fisher').text('－').css('color',nomal);}else if(Number($('.job_level_fisher').text())<=9 && Number($('.job_level_fisher').text())>0){$('.job_level_fisher').css('left','+=5').css('color',nomal);}else if($('.job_level_fisher').text()=='80'){$('.job_level_fisher').css('color',counst);}else{$('.job_level_fisher,.job_level_fisher').css('color',nomal);}
  }

  // 初期値にチェックを入れておく
  $('input[name=char_name_radio]:eq(7)').prop('checked', true);
  $('input[name=char_info_radio]:eq(0)').prop('checked', true);
  $('input[name=job_icon_list]:eq(0)').prop('checked', true);
  $('input[name=position_radio]:eq(0)').prop('checked', true);  
  $('input[name=data_display]:eq(0)').prop('checked', true);  
  $('input[name=data_display]:eq(1)').prop('checked', true);  
  $('input[name=data_display]:eq(2)').prop('checked', true);  
  $('input[name=data_display]:eq(3)').prop('checked', true);  
  $('input[name=data_display]:eq(4)').prop('checked', true);  
  $('input[name=data_display]:eq(5)').prop('checked', true);  

  // コンテンツチェックを入れておく
  $('input[class=favorite_contents]:eq(0)').prop('checked', true);
  $('input[class=favorite_contents]:eq(1)').prop('checked', true);
  $('input[class=favorite_contents]:eq(2)').prop('checked', true);





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

  // 基本
  $("[name=position_radio]").click(function(){
    if($('input[name=position_radio]:eq(0)').prop('checked')){
      $('input[name=position_radio]:eq(0)').prop('checked', true);
      $(".position").css("left","-=480px");
    }else if($('input[name=position_radio]:eq(1)').prop('checked')){
      $('input[name=position_radio]:eq(1)').prop('checked', true);
      $(".position").css("left","+=480px");
    }
  });

  // 表示
  $("[name=data_display]").click(function(){
    var e = $(this).prop("checked");
    var v = $(this).attr("data");
    if(e){
      $('.'+v).removeClass("display_none");
      $('.'+v+"_h").removeClass("display_none");     
    }else{
      $('.'+v).addClass("display_none");
      $('.'+v+"_h").addClass("display_none");
    }
  });
  

  // white基本
   // 色
   $('#colorPicker_white').on('change', function(e){
    // 選択した色の情報を取得
    var color = e.detail[0];
    $(this).val(color);
    // rgbにして1つ1つのデータで解析
    var color_rgb = hex2rgb(color); 
    // 透明度を取得
    num = $("#transparent_value_white").text();
    $(".white_cambas").css("background","rgba("+color_rgb[0]+","+color_rgb[1]+","+color_rgb[2]+","+num*0.01+")");      
    $("#colorPicker_color_white").html(color);
  });

  // 透明度
  $("#transparent_value2_white").slider({
    max:100, //最大値
    min: 0, //最小値
    value: 40, //初期値
    step: 1, //幅
 
    // スライドしたとき
    slide: function( event, ui ) {
      $("#transparent_value_white").html(ui.value);
      var num = $(this).slider( "value" );
      // 調整
      if(num <= 1 ){
        $(".white_cambas").css("display","none");
        num = 0;
      }else if(num >= 99 ){
        $(".white_cambas").css("display","block");
        num = 100;
      }else{
        $(".white_cambas").css("display","block");
      }
      // 現在の色を取得
      var name_color = $(".white_cambas").css("background");
      // rgbの1つ1つの色を解析し、透明度をプラスして表示
      rgb = rgb2hex(name_color);
      $(".white_cambas").css("background","rgba("+rgb[1]+","+rgb[2]+","+rgb[3]+","+num*0.01+")");
    },
    create: function( event, ui ) {
      $("#transparent_value_white").html($(this).slider( "value" ));
    },
    change: function( event, ui ) {
      $("#transparent_value_white").html(ui.value);
    }

  });

  // サイズを変更する
  $("[name=white_cambas]").click(function(){
    var e = $(this).prop("checked");
    if(e){
      $(".white_cambas").draggable( "enable" );
      $(".white_cambas").resizable( "enable" );
    }else{
      $(".white_cambas").draggable( "disable" );
      $(".white_cambas").resizable( "disable" );
    }
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

  // 名前分割
  $("[name=name_split]").click(function(){
    var e = $(this).prop("checked");
    if(e){
      $(".first_last_name").addClass("display_none");
      $(".first_name").removeClass("display_none");
      $(".last_name").removeClass("display_none");
    }else{
      $(".first_last_name").removeClass("display_none");
      $(".first_name").addClass("display_none");
      $(".last_name").addClass("display_none");
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
// メインジョブ
$('.select_job_tank').hover(
  function() {
    $(this).addClass("job_color_tank");
    $(this).addClass("figure");
  },
  function() {
    $(this).removeClass("job_color_tank");
    $(this).removeClass("figure");
  }
);
$('.select_job_healer').hover(
  function() {
    $(this).addClass("job_color_healer");
    $(this).addClass("figure");
  },
  function() {
    $(this).removeClass("job_color_healer");
    $(this).removeClass("figure");
  }
);
$('.select_job_dps').hover(
  function() {
    $(this).addClass("job_color_dps");
    $(this).addClass("figure");
  },
  function() {
    $(this).removeClass("job_color_dps");
    $(this).removeClass("figure");
  }
);
$('.select_job_crafter').hover(
  function() {
    $(this).addClass("job_color_crafter");
    $(this).addClass("figure");
  },
  function() {
    $(this).removeClass("job_color_crafter");
    $(this).removeClass("figure");
  }
);
$('.select_job_gatherer').hover(
  function() {
    $(this).addClass("job_color_gatherer");
    $(this).addClass("figure");
  },
  function() {
    $(this).removeClass("job_color_gatherer");
    $(this).removeClass("figure");
  }
);


// プルダウンジョブを選んだ際に起こるアクション
$('li[class^="select_job_"]').click(function(){
  var job_name = $(this).text();
  var name = $(this).attr("name");
  $(".select_main_job_name").text(job_name);
  $(".char_main_name").text(job_name);
  $(".select_main_job_img_change").attr("src",'img/jobicon/02/'+name+'.png');
  $(".char_main_job_icon_img").attr("src",'img/jobicon/mainjob/'+name+'.png');
  
});

// プルダウンの表示と非表示
$(document).click(function(event) {
  if($(event.target).closest('.select_main_job').length) {
    $(".main_job_select_font").removeClass("display_none");
    $(".select_main_job_plus").text("－");
  }else{
    $(".main_job_select_font").addClass("display_none");
    $(".select_main_job_plus").text("+");   
  }
});






// フォント
$("[name=char_info_radio]").click(function(){
  if($('input[name=char_info_radio]:eq(0)').prop('checked')){
     $('input[name=char_info_radio]:eq(0)').prop('checked', true);
     $(".char_info").css("font-family","'Noto Sans JP', sans-serif")
  }else if($('input[name=char_info_radio]:eq(1)').prop('checked')){
    $('input[name=char_info_radio]:eq(1)').prop('checked', true);
    $(".char_info").css("font-family","'Sawarabi Mincho', sans-serif");
  }else if($('input[name=char_info_radio]:eq(2)').prop('checked')){
    $('input[name=char_info_radio]:eq(2)').prop('checked', true);
    $(".char_info").css("font-family","'Kosugi Maru', sans-serif");
  }else if($('input[name=char_info_radio]:eq(3)').prop('checked')){
    $('input[name=char_info_radio]:eq(3)').prop('checked', true);
    $(".char_info").css("font-family","'Potta One', cursive");
  }else if($('input[name=char_info_radio]:eq(4)').prop('checked')){
    $('input[name=char_info_radio]:eq(4)').prop('checked', true);
    $(".char_info").css("font-family","'Hachi Maru Pop', cursive").css("font-weight","bold");
  }else if($('input[name=char_info_radio]:eq(5)').prop('checked')){
    $('input[name=char_info_radio]:eq(5)').prop('checked', true);
    $(".char_info").css("font-family","'Yusei Magic', sans-serif");
  }else if($('input[name=char_info_radio]:eq(6)').prop('checked')){
    $('input[name=char_info_radio]:eq(6)').prop('checked', true);
    $(".char_info").css("font-family","'RocknRoll One', sans-serif");
  }else if($('input[name=char_info_radio]:eq(7)').prop('checked')){
    $('input[name=char_info_radio]:eq(7)').prop('checked', true);
    $(".char_info").css("font-family","'Reggae One', cursive");
  }else if($('input[name=char_info_radio]:eq(8)').prop('checked')){
    $('input[name=char_info_radio]:eq(8)').prop('checked', true);
    $(".char_info").css("font-family","'Stick', sans-serif");
  }else if($('input[name=char_info_radio]:eq(9)').prop('checked')){
    $('input[name=char_info_radio]:eq(9)').prop('checked', true);
    $(".char_info").css("font-family","'DotGothic16', sans-serif");
    // 本来これ以下はない
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

// 太字にする
// $(".char_info").css("font-weight","bold");



// キャラ名にも情報のフォントを適応
$(".char_info_font_toname").click(function(){
  var font = $(".char_info").css("font-family");
  $(".char_name").css("font-family",font);
});


// 見出し色 キャラ情報
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


// 見出し色　コンテンツ
// 見出し色
$('#char_favorite_h').on('change', function(e){
  // 選択した色の情報を取得
  var color = e.detail[0];
  $(this).val(color);
  $(".char_favorite").css("color",color);
  $("#char_favorite_h_span").html(color);
});
// テキスト色
$('#char_favorite_text_h').on('change', function(e){
  // 選択した色の情報を取得
  var color = e.detail[0];
  $(this).val(color);
  $(".char_favorite_name").css("color",color);
  $("#char_favorite_text_h_span").html(color);
});

// コンテンツ選択
$("[class=favorite_contents]").change(function(){
  // チェックオンオフ取得
  var favorite_check = $(this).prop('checked');
  // 要素取得
    var name = $(this).attr("name");
    var text = $(this).val();
    var img = $(this).next().attr('src');
  if(favorite_check){
    var favorite_html = '<span name="text'+name+'" class="char_info"><img src="'+img+'" alt="">'+text+'</span>'
    // 要素追加
    $(".char_favorite_name").append(favorite_html);
  }else{
    // 要素削除
    $('[name=text'+name+']').remove();
  }

});


// ジョブアイコン
$("[name=job_icon_list]").click(function(){
  if($('input[name=job_icon_list]:eq(0)').prop('checked')){
     $('input[name=job_icon_list]:eq(0)').prop('checked', true);
     $("[class^=job_icon_img_]").each(function(job){
       var job_icon_value = $(this).attr("value");
        $(this).attr("src",'/img/jobicon/01/'+job_icon_value+'.png');
     });

  }else if($('input[name=job_icon_list]:eq(1)').prop('checked')){
    $('input[name=job_icon_list]:eq(1)').prop('checked', true);
    $("[class^=job_icon_img_]").each(function(job){
      var job_icon_value = $(this).attr("value");
       $(this).attr("src",'/img/jobicon/02/'+job_icon_value+'.png');
    });

  }else if($('input[name=job_icon_list]:eq(2)').prop('checked')){
    $('input[name=job_icon_list]:eq(2)').prop('checked', true);
    $("[class^=job_icon_img_]").each(function(job){
      var job_icon_value = $(this).attr("value");
       $(this).attr("src",'/img/jobicon/03/'+job_icon_value+'.png');
    });

  }else if($('input[name=job_icon_list]:eq(3)').prop('checked')){
    $('input[name=job_icon_list]:eq(3)').prop('checked', true);
    $("[class^=job_icon_img_]").each(function(job){
      var job_icon_value = $(this).attr("value");
       $(this).attr("src",'/img/jobicon/04/'+job_icon_value+'.png');
    });
  }
  
});

// ジョブアイコンレベルフォント
$(".job_icon_list_font_name").click(function(){
  var char_name_font = $(".char_name").css("font-family");
  $("[class^=job_level_]").css("font-family",char_name_font);
});

$(".job_icon_list_font_info").click(function(){
  var char_name_font = $(".char_freecompany_name").css("font-family");
  $("[class^=job_level_]").css("font-family",char_name_font);
});

// 位置調整
$(".button_up").click(function(){
  $("[class^=job_level_]").css("top","-=1px");
});
$(".button_down").click(function(){
  $("[class^=job_level_]").css("top","+=1px");
});
$(".button_left").click(function(){
  $("[class^=job_level_]").css("left","-=1px");
});
$(".button_rigth").click(function(){
  $("[class^=job_level_]").css("left","+=1px");
});
// 大きさ
$(".button_minus").click(function(){
  $("[class^=job_level_]").css("font-size","-=1px");
});
$(".button_puls").click(function(){
  $("[class^=job_level_]").css("font-size","+=1px");
});
// 行間
$(".button_line_minus").click(function(){
  $("[class^=job_icon_img_]:eq(0)").css("top","+=1px");  
  $("[class^=job_level_]:eq(0)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(1)").css("top","+=1px");  
  $("[class^=job_level_]:eq(1)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(2)").css("top","+=1px");  
  $("[class^=job_level_]:eq(2)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(3)").css("top","+=1px");  
  $("[class^=job_level_]:eq(3)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(8)").css("top","+=1px");  
  $("[class^=job_level_]:eq(8)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(9)").css("top","+=1px");  
  $("[class^=job_level_]:eq(9)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(10)").css("top","+=1px");  
  $("[class^=job_level_]:eq(10)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(18)").css("top","-=1px");  
  $("[class^=job_level_]:eq(18)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(19)").css("top","-=1px");  
  $("[class^=job_level_]:eq(19)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(20)").css("top","-=1px");  
  $("[class^=job_level_]:eq(20)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(21)").css("top","-=1px");  
  $("[class^=job_level_]:eq(21)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(22)").css("top","-=1px");  
  $("[class^=job_level_]:eq(22)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(23)").css("top","-=1px");  
  $("[class^=job_level_]:eq(23)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(24)").css("top","-=1px");  
  $("[class^=job_level_]:eq(24)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(25)").css("top","-=1px");  
  $("[class^=job_level_]:eq(25)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(26)").css("top","-=1px");  
  $("[class^=job_level_]:eq(26)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(27)").css("top","-=1px");  
  $("[class^=job_level_]:eq(27)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(28)").css("top","-=1px");  
  $("[class^=job_level_]:eq(28)").css("top","-=1px");

});
$(".button_line_puls").click(function(){
  $("[class^=job_icon_img_]:eq(0)").css("top","-=1px");  
  $("[class^=job_level_]:eq(0)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(1)").css("top","-=1px");  
  $("[class^=job_level_]:eq(1)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(2)").css("top","-=1px");  
  $("[class^=job_level_]:eq(2)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(3)").css("top","-=1px");  
  $("[class^=job_level_]:eq(3)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(8)").css("top","-=1px");  
  $("[class^=job_level_]:eq(8)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(9)").css("top","-=1px");  
  $("[class^=job_level_]:eq(9)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(10)").css("top","-=1px");  
  $("[class^=job_level_]:eq(10)").css("top","-=1px");
  $("[class^=job_icon_img_]:eq(18)").css("top","+=1px");  
  $("[class^=job_level_]:eq(18)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(19)").css("top","+=1px");  
  $("[class^=job_level_]:eq(19)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(20)").css("top","+=1px");  
  $("[class^=job_level_]:eq(20)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(21)").css("top","+=1px"); 
  $("[class^=job_level_]:eq(21)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(22)").css("top","+=1px");
  $("[class^=job_level_]:eq(22)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(23)").css("top","+=1px");  
  $("[class^=job_level_]:eq(23)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(24)").css("top","+=1px");  
  $("[class^=job_level_]:eq(24)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(25)").css("top","+=1px");  
  $("[class^=job_level_]:eq(25)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(26)").css("top","+=1px");  
  $("[class^=job_level_]:eq(26)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(27)").css("top","+=1px");  
  $("[class^=job_level_]:eq(27)").css("top","+=1px");
  $("[class^=job_icon_img_]:eq(28)").css("top","+=1px");  
  $("[class^=job_level_]:eq(28)").css("top","+=1px");
});

// ジョブレベル色
$('#job_icon_list_color').on('change', function(e){
  // 選択した色の情報を取得
  var cunst_color = e.detail[0];
  $(this).val(cunst_color);
  $("#job_icon_list_color_span").html(cunst_color);
  nomal = $('#job_icon_list_color_const').val();
  cunst = $('#job_icon_list_color').val();
  job_color_change(nomal,cunst);
});

$('#job_icon_list_color_const').on('change', function(e){
  // 選択した色の情報を取得
  var nomal_color = e.detail[0];
  // チェックを入れる
  $(this).val(nomal_color);
  // 文字表記
  $("#job_icon_list_color_const_span").text(nomal_color);
  nomal = $('#job_icon_list_color_const').val();
  cunst = $('#job_icon_list_color').val();
  // 色を変える
  job_color_change(nomal,cunst);
});


// ドラッグ要素付与
$(".dragg").draggable({
    stop: function(e, ui) {
      var key = $(this).attr('class').split(" ")[0];
      localStorage.setItem(key+"_x", ui.position.left);
      localStorage.setItem(key+"_y", ui.position.top);
    }
});

// 初期値設定
$(".white_cambas").draggable( "disable" );

// リサイズ要素付与
$(".resize").resizable({
  minHeight:10,
  minWidth:10,
  maxWidth:960,
  maxHeight:560,

});
$(".white_cambas").resizable( "disable" );


// 枠線
// 汎用
$("[class=mhover_bg]").hover(
  function(){
    var v = $(this).attr("data");
    var str = v.split(" ");
    str.forEach(v => {
      $("."+v).addClass("mouse_hover_bg");
      $("."+v+"_h").addClass("mouse_hover_bg");
    });
  },
  function(){
    var v = $(this).attr("data");
    var str = v.split(" ");
    str.forEach(v => {
      $("."+v).removeClass("mouse_hover_bg");
      $("."+v+"_h").removeClass("mouse_hover_bg");
    });
  },
);

// テキストだけ
$("[class=mhover_bg_text]").hover(
  function(){
    var v = $(this).attr("data");
    var str = v.split(" ");
    str.forEach(v => {
      $("."+v).addClass("mouse_hover_bg");
    });
  },
  function(){
    var v = $(this).attr("data");
    var str = v.split(" ");
    str.forEach(v => {
      $("."+v).removeClass("mouse_hover_bg");
    });
  },
);





// memo
// char_name_bg
// main_job_bg
// server_bg
// race_bg
// freecompany_bg
// favorite_bg
// job_bg
// mhover_bg





});
