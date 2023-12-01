<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $articles=Article::orderBy('created_at','desc')->take(6)->get();
        return view('pages.homepage' , compact('articles'));
    }
}
