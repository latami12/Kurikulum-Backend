<?php

namespace App\Http\Controllers;

use App\Models\Article;
use illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(4);
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();

        if ($article == NULL)
            abort(404);

        return view('article.single', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'thumbnail' => 'mimes:jpeg,jpg,png,gif,svg',
            'category' => 'required|min:3',
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:3',
        ]);
        $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(public_path('image'), $imgName);

        Article::create([
            'category' => $request->category,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subject' => $request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect('/artikel');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|min:3',
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:3',
        ]);

        $imgName = null;

        if ($request->thumbnail) {
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '-' . $request->thumbnail->extension();

            $request->thumbnail->move(public_path('image'), $imgName);
        }
        Article::find($id)->update([
            'category' => $request->category,
            'title' => $request->title,
            'subject' => $request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect('/artikel');
    }
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/artikel');
    }
}
