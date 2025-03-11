<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestArticle;
use App\Models\article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = article::all();
        return response()->json($articles);
    }

    public function store(RequestArticle $request){
        $article = article::create($request->all());
        $article->tags()->attach([2, 1]);

        return response()->json($request->all(), 201);
    }

    
    public function edit($id){
        $article = article::find($id);

        return response()->json($article);
    }

    public function update(Request $request, $id){
        $article = article::find($id);
        $article->update($request->all());
        $article->tags()->sync([9, 10]);

        return response()->json($article);
    }

    public function destroy($id)
    {
        $article = article::find($id);
        $article->delete();

        return response(["ID" => $article]);
    }
}
