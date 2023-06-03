<?php

namespace App\Http\Controllers;


use App\Models\comment;
use App\Models\products;
use Illuminate\Http\Request;
use App\Models\slide;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    
    public function getIndex(){
        $slide= slide::all();

        $new_product = products::where('new',1)->paginate(8);
        $sanpham_khuyenmai =products::where('promotion_price','<>',0)->paginate(4)	;				
        //dd($new_product);	
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }
    public function getDetail(Request $request)
    {
      $sanpham = products:: where('id', $request->id)->first();
      $splienquan= products:: where('id','<>', $sanpham->id,'and','id_type','=',$sanpham->id_type,)->paginate(3);
      $comments= comment:: where('id_products', compact('sanpham','splienquan','comments'));
      return view('page.chitiet_sanpham',compact('sanpham','splienquan','comments'));


        //return view('page.trangchu',['slide'=>$slide]);
        $new_product = products::where('new',1)->get();
        $new_product_array= $new_product->toArray();
        return view('page.trangchu',compact('slide','new_product_array'));

    }

    
    public function getLoaiSP(){
        return view('page.loai_sanpham');
    }
}?