<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('articles', [
            'articles' => $articles,
        ]);
    }

    public function create(): View
    {
        return view('article-create');
    }

    public function store(Request $request)
    {
        return 'store ' . $request->input('name');

        $article = new Article();
        $article->name = $request->input('name');
        $article->save();

        return redirect('/articles');
    }    

    public function show(Request $request, $id)
    {
        return 'show ' . $request->input('name') . ' ' . $id;

        $article = Article::find($id);
        
        return 'show ' . $article->name . ' with id ' . $id;
    }

    public function update(Request $request, $id)
    {
        return 'update ' . $request->input('update-name') . ' ' . $id;

        $article = Article::find($id);
        $article->name = $request->input('update-name');
        $article->save();

        return redirect('/articles');
    }

    public function destroy(Request $request, $id)
    {
        return 'destroy ' . $id;

        $article = Article::find($id);
        $article->destroy();

        return redirect('/articles');
    }
}
