<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticlesController extends Controller
{
    public function index () {
        $articles = Article::allArticlesPagination(6);

        return view('app.index', compact('articles'));
    }

    public function oneArticle ($slug) {
        $article = Article::oneArticle($slug);
        return view('app.article.index', compact('article'));
    }
}
