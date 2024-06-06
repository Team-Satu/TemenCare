<?php

namespace App\Http\Controllers;

use App\Models\Articles;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        return view('mobile.article', compact('articles'));
    }
}
