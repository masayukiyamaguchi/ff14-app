<?php

namespace App\Http\Controllers\checkleve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class IndexController extends Controller
{
    //top
    public function Index()
    {
        return view("checkleve.index");
    }


}
