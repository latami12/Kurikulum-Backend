<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }
    public function show($slug)
    {
        $show = Article::where('slug', $slug)->first();

        return view('show.index', compact('show'));
    }
    public function cate($cate)
    {
        $articles = Article::where('category', $cate)->get();

        return view('show.cate', compact('articles'));
    }


}