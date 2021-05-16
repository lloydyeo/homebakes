<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function index(Request $request) {
        return view('blog.index');
    }

    public function showArticle(Request $request, Article $article) {

    }
}
