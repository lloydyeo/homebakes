<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Homepage;
use App\Models\ProductImage;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Shop;

class HomeController extends Controller
{
    public function index(Request $request) {

        return view('index', compact('homepage'));
    }

    public function subscribe(Request $request) {
        $prefix = $request->has('prefix') ? $request->input('prefix') : '';
        $email = $request->has($prefix . 'email') ? $request->input($prefix . 'email') : '';
        if ($email) {
            $subscriber = new Subscriber;
            $subscriber->email = $email;
            $subscriber->save();
        }
        return response()->json(array_merge($request->all(), ['message' => 'Successfully subscribed!']));
    }

    public function home(Request $request) {
        $homepage = Homepage::all();
        $articles = Article::where('published', 1)->whereNotNull('cover_image')->orderBy('created_at', 'desc')->get();
        $shops = Shop::where('published', 1)->whereNotNull('cover_image')->get();
        $product_count = ProductImage::where('id', '>', 0)->count();
        return view('home', compact('articles', 'shops', 'homepage', 'product_count'));
    }

    public function aboutUs(Request $request) {
        $aboutUs = AboutUs::whereNotNull('description')->orderBy('id', 'asc')->get();
        return view('about-us', compact('aboutUs'));
    }

    public function onboarding(Request $request) {
        return view('onboarding');
    }
}
