<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use App\Models\slide;

class PageController extends Controller
{
    
    public function getIndex(){
        $slide= slide::all();
        $new_product = products::where('new',1)->paginate(8);
        $sanpham_khuyenmai =products::where('promotion_price','<>',0)->paginate(4)	;				
        //dd($new_product);	
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function getDetail(Request $request){
        $sanpham =products::where('id',$request ->id)->first();
        $splienquan =products::where('id,'<>',$sanpham->id,'and','id_type',')
    }

    public function getLoaiSP(){
        return view('page.loai_sanpham');
    }
}