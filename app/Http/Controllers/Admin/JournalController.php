<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = Journal::orderBy('date', 'desc')->get();
        return view('admin.journal.index',[
            'journals'=>$journals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.journal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $journal = new Journal();
        $journal -> title = $request -> title;
        $journal -> text = $request -> text;
        $journal -> img = $request -> img;
        $journal -> cover = $request -> cover;
        $journal -> number = $request -> number;
        $journal -> href = $request -> href;
        $journal -> doublejournal = $request -> doublejournal;
        $journal -> free = $request -> free;
        $journal -> publish = $request -> publish;
        $journal -> date = strtotime($request -> data);
        $journal -> save();

        return redirect()->back()->withSuccess('Журнал успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $journal = Journal::where('number', $id)->first();
        $posts = Post::where('journal_number', $journal['number'])->orderBy('created_at', 'desc')->get();
        return view('admin.journal.edit',[
            'journal'=>$journal,
            'posts' => $posts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $journal = Journal::find($id);
        $journal -> title = $request -> title;
        $journal -> text = $request -> text;
        $journal -> img = $request -> img;
        $journal -> cover = $request -> cover;
        $journal -> number = $request -> number;
        $journal -> href = $request -> href;
        $journal -> doublejournal = $request -> doublejournal;
        $journal -> free = $request -> free;
        $journal -> publish = $request -> publish;
        $journal -> date = strtotime($request -> data);
        $journal -> save();

        return redirect()->back()->withSuccess('Журнал успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = Journal::find($id);
        $journal->delete();
        return redirect()->back()->withSuccess('Журнал удален!');
    }
}
