<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use App\Models\slide;

class PageController extends Controller
{
    
    public function getIndex(){
        $slide= slide::all();
        $new_product = Product::where('new',1)->paginate(8);					
        $new_product = products::where('new',1)->get();	
        //dd($new_product);	
    	return view('page.trangchu',compact('slide','new_product'));
    }

    public function getLoaiSP(){
        return view('page.loai_sanpham');
    }
}