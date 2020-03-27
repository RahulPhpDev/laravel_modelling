<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Scope\ArticleGlobalScope;
use DB;
use  App\User;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          // Job::query()->withCount([
          //       'charges as total_application_fee' => function (Builder $query) {
          //           $query->select(DB::raw('ROUND(SUM(charges.application_fee), 2)'));
          //       },
          //   ])

        $articles = Article::withoutGlobalScope(ArticleGlobalScope::class)

                    ->get();
                    // dd($articles);
return view('article.index', compact('articles'));
// dd($articles);
//        $title =  $articles->filter(function($article) {
//             return strlen($article->title) > 6;
//         })->map(function($article) {
//             return $article->title;
//         });
//         dd($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id')
                ->shuffle()
                ->tap(function($user) {
                    dd($user);
                    // info($user->name);
                })
                 ->push( '--Select Name--','name');
        // $users = User::all()->shuffle()->chunk(5);
        // $users = User::select(DB::raw('name', 'id')->prepend( '--Select Name--','name');
        // dd($users);
        return view('article.create', compact('users'));
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
}
