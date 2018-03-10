<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchTableController extends Controller
{
    public function tableSearch(){
        return view('table_search');
    }

    public function testing(){
        return view('test.test');
    }
}
