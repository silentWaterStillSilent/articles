<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(Auth::user());
//        $articles = Article::latest()->where('published_at','<=',Carbon::now())->get();
//        dd(Article::latest()->where('published_at','<=',Carbon::now())->get());
        $articles = Article::latest()->published()->where('user_id','=',Auth::user()->id)->get();
        return view('articles.index',compact('articles'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *\App\Http\Requests\CreateArticleRequest
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        // 接受post方法
//        $input = $request->all();
        $this->validate($request,[            'title' => 'required|min:3',            'content' => 'required',]);
        Article::create(array_merge(array('user_id'=>Auth::user()->id), $request->all()));
        return redirect('articles');

        // 存入数据库
        // 重定向
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        dd($id);
        $article = Article::findOrFail($id);
//        dd($article->published_at->year);
        return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\CreateArticleRequest $request, $id)
    {
//        dd($request->isMethod('PATCH')); // 返回 true
//        dd($request->url()); // 返回 "http://localhost:8000/articles/8"
//        dd($request->path()); // 返回 "articles/8"
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
