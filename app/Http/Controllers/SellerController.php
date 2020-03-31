<?php

namespace App\Http\Controllers;

use App\model\Product;
use App\model\ProductImage;
use Illuminate\Http\Request;
use Image;
class SellerController extends Controller
{
    public function home(){
        return view('seller.home.home');
    } 

    public function insertProduct(Request $request){
        $request["supplier_id"]=1;
        $product=Product::create($request->all());
        foreach($request->image as $img)
        {
            $imageName = time().'.'.$img->getClientOriginalExtension();
            $image_resize = Image::make($img->getRealPath());              
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('images/' .$imageName));
            ProductImage::create([
                "src"=>$imageName,
                "product_id"=>$product->id,
                "serial"=>1
            ]);
        }
    }
}
