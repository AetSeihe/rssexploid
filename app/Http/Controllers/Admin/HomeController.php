<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\PictureWeek;
use App\Models\Journal;
use App\Models\Post;
use App\Models\DayInHistory;
use App\Models\About;

class HomeController extends Controller
{
    public function index()
    {
        $month_list = array(
            1  => 'Января',
            2  => 'Февраля',
            3  => 'Марта',
            4  => 'Апреля',
            5  => 'Мая',
            6  => 'Июня',
            7  => 'Июля',
            8  => 'Августа',
            9  => 'Сентября',
            10 => 'Октября',
            11 => 'Ноября',
            12 => 'Декабря'
        );
        $numberWeek = date('W');
        $journal = Journal::where('publish', 1)->orderBy('number', 'desc')->first();
        $posts = Post::where('journal_id', $journal->id)->get();
        $pictures = PictureWeek::where('weeknumber', $numberWeek)->orderBy('created_at', 'desc')->get();
        $news = News::orderBy('created_at', 'desc')->take(6)->get();
        $day = DayInHistory::where('day', (int)date('j')-1)->where('month', date('n'))->get();

        if($day[0]){
            $dayDate = $day[0]['day'] . ' ' . $month_list[$day[0]['month']] . ' ' . $day[0]['year'] . ' года';
        }else{
            $day = DayInHistory::where('day', (int)date('j')-1)->where('month', date('n'))->get();
            $dayDate = $day[0]['day'] . ' ' . $month_list[$day[0]['month']] . ' ' . $day[0]['year'] . ' года';
        }


        return(view('index', compact('news', 'pictures','day','dayDate','posts')));
    }
    public function indexAdmin()
    {
        return(view('admin.home.index'));
    }
    public function contacts(){
        $content = About::find(1);
        return(view('contact', compact('content')));
    }
    public function news(){
        $news = News::all();
        return(view('news', compact('news')));
    }
    public function journal(){
        return(view('journal'));
    }
    public function about(){
        return(view('about'));
    }
    public function pictures(){
        return(view('pictures'));
    }
    public function dayinhistory(){
        return(view('dayinhistory'));
    }
    public function journalarchive(){
        return(view('journalarchive'));
    }
    public function videoarchive(){
        return(view('videoarchive'));
    }
    public function faq(){
        return(view('faq'));
    }
    public function reviews(){
        return(view('reviews'));
    }
    public function shop(){
        return(view('shop'));
    }

}
