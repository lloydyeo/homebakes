<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Shop;

class HomeController extends Controller
{
    public function index(Request $request) {
        return view('index');
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
        $articles = Article::where('published', 1)->whereNotNull('cover_image')->get();
        $shops = Shop::where('published', 1)->whereNotNull('cover_image')->get();
        return view('home', compact('articles', 'shops'));
    }

    public function aboutUs(Request $request) {
        return view('about-us');
    }
}
