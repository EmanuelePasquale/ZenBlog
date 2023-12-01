<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;


class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }


    public function create(){
        return view('articles.create');
    }

    public function store(ArticleStoreRequest $request){

        $path_image = '';
        if($request->hasFile('image')){
             $file_name = $request->file('image')->getClientOriginalName();
             $path_image = $request->file('image')->storeAs('public/images', $file_name);

        }

        Article::create([
            'title'=> $request->title,
            'subtitle'=> $request->subtitle,
            'body'=> $request->body,
            'image'=> $path_image,
        ]);
        return redirect()->route('articles.index')->with('success', 'Articolo Caricato');
    }
}
