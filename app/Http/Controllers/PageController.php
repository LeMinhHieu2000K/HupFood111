<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\ProductType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $category = ProductCategory::all();
        $ProductType = ProductType::all();
        $NewProduct = Product::where('new', 1)->get();
        $ProductFeature = Product::inRandomOrder()->paginate(6);
        $ProductDiscount = Product::where('promotion_price','>', 0)->get();
        view()->share('NewProduct', $NewProduct);
        view()->share('category', $category);
        view()->share('ProductType', $ProductType);
        view()->share('ProductFeature', $ProductFeature);
        view()->share('ProductDiscount', $ProductDiscount);
        
    }
    public function getTrangChu()
    {
        return view('page.home');
        
    }

    public function getProductList($id)
    {
        $product =  Product::where('id_type', '=' , $id)->get();
        return view('page.ProductList',['product'=>$product]);
    }
}
