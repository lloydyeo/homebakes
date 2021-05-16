<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        return view('index');
    }

    public function subscribe(Request $request) {
        $prefix = $request->has('prefix') ? $request->input('prefix') : '';
        $email = $request->has($prefix . 'email') ? $request->input($prefix . 'email') : '';
        if ($email) {

        }
        return response()->json(array_merge($request->all(), ['message' => 'Successfully subscribed!']));
    }

    public function home(Request $request) {
        return view('home');
    }

    public function aboutUs(Request $request) {
        return view('about-us');
    }
}
