<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy('id','desc')->paginate(5);

        return view('article.index', compact('articles'));
    }

    public function show(string $slug){
        // return view('article.single', ["slug" => $slug]);
        return view('article.single', compact('slug'));
    }

    public function create(){
        return view('article.create');
    }

    public function store(Request $request):RedirectResponse{

        $validated = $request->validate([
            'title' => 'required|min:3|max:255',
            'subject' => 'required|min:3',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->subject = $request->subject;
        $article->save();

        return redirect('/artikel');
    }

    public function edit($id){
        $article = Article::find($id);

        return view('article.edit', compact('article'));
    }

    public function update(Request $request, int $id){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->subject = $request->subject;
        $article->update();

        return redirect('/artikel');
    }
}
