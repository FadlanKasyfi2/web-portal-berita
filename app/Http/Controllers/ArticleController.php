<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
  
    public function show($id)
    {
        //
        $posts=Article::whereId($id)->first();
        $komen = Comment::all();
        $article=Article::inRandomOrder()->orderBy('id')->paginate(5);
        return view('article.show',compact('posts','article','komen','id'));
    }

    public function insertData(Request $req, $id)
    {
        $user = new Comment();
        $user->name = $req->nama;
        $user->comment = $req->komentar;
        $user->id_article = $req->id;
        $user->save();
        return back();
    }

  
}
