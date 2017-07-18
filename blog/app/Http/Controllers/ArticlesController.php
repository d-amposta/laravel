<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class ArticlesController extends Controller
{
    function createArticle() {
    	/*$new_article = new Article();
    	$new_article->title = "Article 3";
    	$new_article->content = 'Article content';
    	$new_article->save();*/
    	/*return redirect('/home')*/
    	return view('/articles/create');
    }

    function saveNewArticle(Request $request) {
    	/*dd($request);*/
    	$new_article = new Article();
    	$new_article->title = $request->title;
    	$new_article->content = $request->content;
    	$new_article->save();

    	return redirect('/home');
    }

    function showArticle() {
    	$articles = Article::all();
		return view('articles/articles_list', compact('articles'));
    }

    function displayOneArticle($id) {
    	$article=Article::find($id);

    	return view('articles/display_one_article', compact('article'));
    }

    function deleteArticle($id) {
    	$article_tbd=Article::find($id);
    	$article_tbd->delete();

    	return back();
    }

    function editArticle($id) {
    	$article=Article::find($id);

    	return view('articles/edit_form', compact('article'));
    }

    function saveEditArticle($id, Request $request) {
    	$article_tbe=Article::find($id);
    	$article_tbe->title = $request->title;
    	$article_tbe->content = $request->content;
    	$article_tbe->save();

    	return redirect('/home');
    }
}
