<?php

namespace App\Http\Controllers\checkleve;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function Index()
    {
        return view("checkleve.index");
    }
}
