<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DayInHistory;
use Illuminate\Http\Request;

class DayInHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $month_list = array(
            1  => 'января',
            2  => 'февраля',
            3  => 'марта',
            4  => 'апреля',
            5  => 'мая',
            6  => 'июня',
            7  => 'июля',
            8  => 'августа',
            9  => 'сентября',
            10 => 'октября',
            11 => 'ноября',
            12 => 'декабря'
        );
        $days = DayInHistory::orderBy('created_at', 'desc')->get();
        foreach($days as $day){
            //$title = htmlentities($day['title']);
            $title = str_replace(chr(160),' ', $day['title']);
            $title = mb_ereg_replace('[ ]+', ' ', $title);
            //echo $title .'<br>';
            $date = strstr($title, ' года', true);
            if($date){
                //var_dump($date);
                $dateArr = explode(' ', $date);
                $title = str_replace($date. ' года','', $title);
                //var_dump($dateArr);
                $dayInHistory = DayInHistory::find($day['id']);
                $dayInHistory -> title = $title;
                $dayInHistory -> year = (int)$dateArr[2];
                $dayInHistory -> month = (int)array_search(strtolower($dateArr[1]), $month_list);
                $dayInHistory -> day = (int)$dateArr[0];
                if($dayInHistory -> month == 0){
                    $dayInHistory -> month = 9;
                }
                //$dayInHistory -> save();
                //echo $title .'<br>';
                //echo $dayInHistory -> day.' '. $dayInHistory -> month.' '. $dayInHistory -> year.' '.$dayInHistory -> title.'<br>';
            }

        }

        return view('admin.dayinhistory.index',[
            'days'=>$days
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dayinhistory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newDay = new DayInHistory();
        $newDay -> title = $request -> title;
        $newDay -> text = $request -> text;
        $newDay -> img = $request -> img;
        $dateArr = explode('-', $request -> data);
        $newDay -> year = (int)$dateArr[0];
        $newDay -> month = (int)$dateArr[1];
        $newDay -> day = (int)$dateArr[2];
        $newDay -> save();

        return redirect()->back()->withSuccess('День в истории успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DayInHistory  $dayInHistory
     * @return \Illuminate\Http\Response
     */
    public function show(DayInHistory $dayInHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DayInHistory  $dayInHistory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //var_dump($dayInHistory);
        return view('admin.dayinhistory.edit',[
            'day'=>DayInHistory::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DayInHistory  $dayInHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dayInHistory = DayInHistory::find($id);
        $dayInHistory -> title = $request -> title;
        $dayInHistory -> text = $request -> text;
        $dayInHistory -> img = $request -> img;
        $dateArr = explode('-', $request -> data);
        $dayInHistory -> year = (int)$dateArr[0];
        $dayInHistory -> month = (int)$dateArr[1];
        $dayInHistory -> day = (int)$dateArr[2];
        $dayInHistory -> save();

        return redirect()->back()->withSuccess('День в истории успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DayInHistory  $dayInHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dayInHistory = DayInHistory::find($id);
        $dayInHistory->delete();
        return redirect()->back()->withSuccess('День в истории удален!');
    }
}
