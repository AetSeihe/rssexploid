<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin.news.index',[
            'news'=>$news
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news -> title = $request -> title;
        $news -> author = $request -> author;
        $news -> anonce = $request -> anonce;
        $news -> text = $request -> text;
        $news -> img = $request -> img;
        $news -> date = strtotime($request -> data);
        $news -> save();

        return redirect()->back()->withSuccess('Новость успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.news.edit',[
            'news'=>News::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news -> title = $request -> title;
        $news -> author = $request -> author;
        $news -> anonce = $request -> anonce;
        $news -> text = $request -> text;
        $news -> img = $request -> img;
        $news -> date = strtotime($request -> data);
        $news -> save();

        return redirect()->back()->withSuccess('Новость успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()->withSuccess('Новость удалена!');
    }
}
