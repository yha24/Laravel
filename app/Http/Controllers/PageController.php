<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }

    public function getLoaiSP(){
        return view('page.loai_sanpham');
    }
}