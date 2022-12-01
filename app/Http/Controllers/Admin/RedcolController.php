<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Redcol;
use Illuminate\Http\Request;

class RedcolController extends Controller
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
        return view('admin.redcol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Redcol();
        $person -> fio = $request -> fio;
        $person -> text = $request -> text;
        $person -> img = $request -> img;
        $person -> anonce = $request -> anonce;
        $person -> save();

        return redirect()->route('about.index')->withSuccess('Карточка сотрудника добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Redcol  $redcol
     * @return \Illuminate\Http\Response
     */
    public function show(Redcol $redcol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Redcol  $redcol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.redcol.edit',[
            'person'=>Redcol::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Redcol  $redcol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $person = Redcol::find($id);
        $person -> anonce = $request -> anonce;
        $person -> text = $request -> text;
        $person -> img = $request -> img;
        $person -> fio = $request -> fio;
        $person -> save();

        return redirect()->route('about.index')->withSuccess('Карточка сотрудника обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Redcol  $redcol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Redcol::find($id);
        $person->delete();
        return redirect()->route('about.index')->withSuccess('Карточка сотрудника удалена!');
    }
}
