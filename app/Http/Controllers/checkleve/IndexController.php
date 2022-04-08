<?php

namespace App\Http\Controllers\checkleve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\checkleve\Checkleve_data;

class IndexController extends Controller
{
    //top
    public function Index()
    {
        return view("checkleve.index");
    }

    //top
    public function post(Request $request)
    {
        $search_data = Checkleve_data::where("email", $request->email)->first();
        
        if($search_data){
            $datas = $search_data;

        }else{
            //メールデータがない場合
            $datas = new Checkleve_data();       
        }

        $datas->email = $request->email;
        $datas->lossdata = $request->date;
        $datas->time = $request->time;
        $datas->count = $request->count;

        $datas->save();     

        return view("checkleve.index");



    }
}
