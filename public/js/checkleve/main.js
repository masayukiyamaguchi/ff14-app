$(function () {

    // 前の入力数値を代入
    $("#leave_num").val(localStorage.getItem('coffee_cookie_leave_num'));
    $("#desired_date").text(localStorage.getItem('coffee_cookie_comment'));

    $("#calculation_date").click(function () {

        // 入力内容を取得
        var leave_num = $("#leave_num").val();
        localStorage.setItem('coffee_cookie_leave_num', leave_num);

        // リーヴ券の余剰枚数を計算
        var unacquired_leave = 100 - leave_num;

        // 経過日数と余剰を計算
        var date_wait = unacquired_leave / 3
        // 小数点切り捨て
        date_wait = parseInt(date_wait, 10);
        // 余剰
        var data_wait_re = unacquired_leave % 3;

        // 日付情報を取得
        var now = new Date();
        // 時間
        var h = now.getHours();


        // ◯枚の計算
        switch (data_wait_re) {
            case 0:
                var mai = 100;
                break;

            case 1:
                var mai = 99;
                break;

            case 2:
                var mai = 98;
                break;
        }

        //◯時での計算
        if (h < 9 & date_wait % 2 == 1) {
            zi = 9;
        } else if (h < 9 & date_wait % 2 == 0) {
            zi = 21;
        } else if (21 > h >= 9 & date_wait % 2 == 1) {
            zi = 21;
        } else if (21 > h >= 9 & date_wait % 2 == 0) {
            zi = 9;
        } else if (h >= 21 & date_wait % 2 == 1) {
            zi = 9;
        } else {
            zi = 21;
        }

        // すすめる日数を計算
        if (h < 9) {
            nichi = Math.ceil(date_wait / 2) - 1;
            next = 9;
        } else if (21 > h >= 9) {
            nichi = Math.floor(date_wait / 2);
            next = 21;
        } else {
            nichi = Math.ceil(date_wait / 2);
            next = 9;
        }

        // 何日後の日数を計算
        now.setDate(now.getDate() + nichi);

        // いっぱいになる日付を算出
        var m = now.getMonth() + 1;
        var d = now.getDate();

        if (leave_num == "") {
            $("#desired_date").text("ちゃんと入力してください！");
        } else if (leave_num > 100) {
            $("#desired_date").text("そんなに多くは持てません！");
        } else if (leave_num >= 98) {
            $("#desired_date").text("次の" + next + "時で溢れます！");
        } else {
            $("#desired_date").text(m + '月' + d + '日(' + nichi + '日後)' + zi + '時で' + mai + '枚。');
        }

        //画像変更
        var images = [
            'leveicon1.png',
            'leveicon2.png',
            'leveicon3.png',
            'leveicon4.png',
            'leveicon5.png',
            'leveicon6.png',
            'leveicon7.png',
            'leveicon8.png',
            'leveicon9.png',
            'leveicon10.png',
            'leveicon11.png',
            'leveicon12.png',
            'leveicon13.png'
        ];
        var randImg = images[Math.floor(Math.random() * images.length)];
        var icon_src = "images/checkleve/" + randImg;

        $(".message_icon_img").attr("src", icon_src);

        //表示
        $(".message_panel").css("display", "block");

        // 記録
        localStorage.setItem('coffee_cookie_comment', $("#desired_date").text());

    });

    //スクショ
    $("#plotter-img").click(function () {

        // インプットから、テキストへ差し替える
        var input_num = $("#leave_num").val();
        $(".input_area_text_none").text(input_num);
        
        $(".input_area_text_none").css("display","block");
        $(".input_area_text").css("display","none");        

        html2canvas(document.querySelector("#target")).then(canvas => {
            let downloadEle = document.createElement("a");
            downloadEle.href = canvas.toDataURL("image/png");
            downloadEle.download = "checkleve.png";
            downloadEle.click();
        });

        $(".input_area_text_none").css("display","none");
        $(".input_area_text").css("display","block"); 

    });



    $("#coffee_bean_button").click(function () {
        // インプットの内容をGET
        var coffee_cookie = $("#coffee_cookie_num").val();
        var fire_cristal_num = $("#fire_cristal_num").val();
        var water_cristal_num = $("#water_cristal_num").val();
        var upland_wheatflour_num = $("#upland_wheatflour_num").val();
        var coffee_been_num = $("#coffee_been_num").val();
        var garden_beatsuger_num = $("#garden_beatsuger_num").val();
        var upland_wheat_num = $("#upland_wheat_num").val();
        var garden_beat_num = $("#garden_beat_num").val();
        var coffee_cookie_make_num = $("#coffee_cookie_make_num").val();


        // 作る個数を計算
        var meke_num = coffee_cookie_make_num - coffee_cookie;

        if (meke_num < 0) {
            alert("作りたい個数：\nもうそれ以上持ってるよ");
            return (0);
        }

        // ウォータークリスタル個数計算        
        water_cristal_need_num = NeedItemQuantity(meke_num, water_cristal_num, 3, 7);
        // コーヒービーン個数計算
        coffee_been_need_num = NeedItemQuantity(meke_num, coffee_been_num, 3, 1);

        //すでに中間素材を持っていた場合の原料の調整
        // 小麦
        meke_num_upland = meke_num - upland_wheatflour_num * 3;
        upland_wheat_need_num = NeedItemQuantity(meke_num_upland, upland_wheat_num, 9, 5);
        // ビーン
        meke_num_beatsuger = meke_num - garden_beatsuger_num * 3;
        garden_beat_need_num = NeedItemQuantity(meke_num_beatsuger, garden_beat_num, 9, 5);

        // ファイアークリスタル個数計算
        // 本体
        fire_cristal_need_num1 = NeedItemQuantityFC(meke_num, 3, 7);
        // 中間（小麦）
        fire_cristal_need_num2 = NeedItemQuantityFC(meke_num_upland, 9, 7);
        // 中間（ビート）
        fire_cristal_need_num3 = NeedItemQuantityFC(meke_num_beatsuger, 9, 6);


        fire_cristal_need_num = fire_cristal_need_num1 + fire_cristal_need_num2 + fire_cristal_need_num3 - fire_cristal_num;

        $("#fire_cristal_neces").text(fire_cristal_need_num);
        $("#water_cristal_neces").text(water_cristal_need_num);
        $("#coffee_been_neces").text(coffee_been_need_num);
        $("#upland_wheat_neces").text(upland_wheat_need_num);
        $("#garden_beat_neces").text(garden_beat_need_num);


    });

    function NeedItemQuantity(meke_num, item_num, cookie_conversion, need_quantity) {
        // 必要数を計算（本体）
        var num = Math.ceil(meke_num / cookie_conversion) * need_quantity;
        num = num - item_num;
        if (num <= 0) {
            return 0;
        } else {
            return num;
        }

    }

    function NeedItemQuantityFC(meke_num, cookie_conversion, need_quantity) {
        // 必要数を計算（本体）
        var num = Math.ceil(meke_num / cookie_conversion) * need_quantity;
        if (num <= 0) {
            return 0;
        } else {
            return num;
        }

    }






});