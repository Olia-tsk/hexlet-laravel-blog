<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();

        return view('article.index', compact('articles'));
    }

    public function create()
    {
        $article = new Article();

        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:articles',
            'body' => 'required|min:100',
        ]);

        $article = new Article();
        $article->fill($data);
        $article->save();

        Session::flash('flash_message', 'Article added');

        return redirect()->route('articles.index');
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->validated();

        $article->fill($data);
        $article->save();

        Session::flash('flash_message', 'Article successfully updated');

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        if ($article) {
            $article->delete();
        }

        Session::flash('flash_message', 'Article deleted');

        return redirect()->route('articles.index');
    }
}
