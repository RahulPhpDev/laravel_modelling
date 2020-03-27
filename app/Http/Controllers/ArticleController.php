<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Scope\ArticleGlobalScope;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article =Article::withoutGlobalScope(App\Scope\ArticleGlobalScope::class)->get();
        dd($article->count());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function search(Request $request) 
    {
        /*
        $query = Article::when(
            $request->has('id')
        );
        if($request->has('id')) {
            $query->where('id', $request->id);
        }
       $article =  $query->get();
       */

       $articles = Article::withoutGlobalScope(ArticleGlobalScope::class)->when(request('id'), function($query) {
           return $query->where('id', request('id'));
       })
       ->when(request('title'), function($query) {
           return $query->orWhere('title', request('title'));
       })
       ->get(); 
       dd($articles);
    }
}
