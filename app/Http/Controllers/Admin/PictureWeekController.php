<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PictureWeek;
use Illuminate\Http\Request;

class PictureWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = PictureWeek::orderBy('weeknumber', 'desc')->get();
        return view('admin.pictureweek.index',[
            'pictures' => $pictures
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pictureweek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $picture = new PictureWeek();
        $picture -> title = $request -> title;
        $picture -> text = $request -> text;
        $picture -> anonce = $request -> anonce;
        $picture -> img = $request -> img;
        $picture -> weeknumber = $request -> weeknumber;
        $picture -> save();

        return redirect()->back()->withSuccess('Картина успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PictureWeek  $pictureWeek
     * @return \Illuminate\Http\Response
     */
    public function show(PictureWeek $pictureWeek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PictureWeek  $pictureWeek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pictureweek.edit',[
            'picture'=>PictureWeek::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PictureWeek  $pictureWeek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $picture = PictureWeek::find($id);
        $picture -> title = $request -> title;
        $picture -> text = $request -> text;
        $picture -> anonce = $request -> anonce;
        $picture -> img = $request -> img;
        $picture -> weeknumber = $request -> weeknumber;
        $picture -> save();

        return redirect()->back()->withSuccess('Картина успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PictureWeek  $pictureWeek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = PictureWeek::find($id);
        $picture->delete();
        return redirect()->back()->withSuccess('Картина удалена!');
    }
}
