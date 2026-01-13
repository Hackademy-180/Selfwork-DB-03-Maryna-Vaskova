<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    public function articles_index(){
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function articles_create(){
        return view('articles.create');
    }

    public function article_submit(ArticleRequest $req){


        Article::create([
            'title' => $req->title,
            'description' => $req->description,
            'img' => $req->file('img') ? $req->file('img')->store('image', 'public') : "/media/default.jpg"
        ]);
        return redirect(route('articles_create'))->with('status', 'Articolo salvato!');
    }
}
