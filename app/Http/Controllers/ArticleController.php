<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('articles.index');
    }



    public function create(){
        $articles = Article::all();
        return view('articles.create', compact('articles'));
    }
}
