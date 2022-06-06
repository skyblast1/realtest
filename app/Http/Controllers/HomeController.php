<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class HomeController extends Controller
{
    public function index ($id) {
        //$articles = Article::with('tags','states')->orderBy('created_at', 'desc')->take(6)->get();

        //$article = Article::find($id);
        //dd($article);
        $articles = Article::lastLimit(6);
        return view('app.home', [
            'articles'=>$articles
        ]);
    }
}
