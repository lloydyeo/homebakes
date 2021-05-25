<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    public function index(Request $request) {
        $articles = Article::where('published', 1)->whereNotNull('cover_image')->get();
        return view('blog.index', compact('articles'));
    }

    public function showArticle(Request $request, Article $article) {
        return view('blog.inner', compact('article'));
    }
}
