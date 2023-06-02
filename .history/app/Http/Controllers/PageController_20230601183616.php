<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;

class PageController extends Controller
{
    
    public function getIndex(){
        $slide= slide::all();
        $new_product = ::where('new',1)->get();	
        //dd($new_product);	
    	return view('page.trangchu',compact('slide','new_product'));
    }

    public function getLoaiSP(){
        return view('page.loai_sanpham');
    }
}