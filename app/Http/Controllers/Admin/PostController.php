<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Journal;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create',[
            'journal_number'=>$_GET['journal_number'],
            'categories'=>Category::orderBy('title','desc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post -> title = $request -> title;
        $post -> text = $request -> text;
        $post -> img = $request -> img;
        $post -> autor = $request -> autor;
        $post -> journal_number = $request -> journal_number;
        $post -> cat_id = $request -> cat_id;
        $post -> publish = $request -> publish;
        $post -> anonce = $request -> anonce;
        $post -> subscription= $request -> subscription;
        $post -> save();

        return redirect()->route('journal.edit', $request -> journal_number)->withSuccess('Статья успешно добавлена!');
        //return redirect()->back()->withSuccess('Статья успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit',[
            'post'=>Post::find($id),
            'categories'=>Category::orderBy('title','desc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post -> title = $request -> title;
        $post -> text = $request -> text;
        $post -> img = $request -> img;
        $post -> autor = $request -> autor;
        $post -> journal_number = $request -> journal_number;
        $post -> cat_id = $request -> cat_id;
        $post -> publish = $request -> publish;
        $post -> anonce = $request -> anonce;
        $post -> subscription= $request -> subscription;
        $post -> save();

        return redirect()->route('journal.edit', $request -> journal_number)->withSuccess('Статья успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('journal.edit', $post -> journal_number)->withSuccess('Статья удалена!');
    }
}
