<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request) {
        $shops = Shop::all();
        return view('shop.index', compact('shops'));
    }
    public function showShop(Request $request, Shop $shop) {
        $product_images = ProductImage::where('shop_id', $shop->id)->orderBy('sort_order', 'asc')->get();
        return view('shop.merchant-inner', compact('shop', 'product_images'));
    }
}
