<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\DayInHistory;
use App\Models\Journal;
use App\Models\Likepost;
use App\Models\News;
use App\Models\Payjournal;
use App\Models\PictureWeek;
use App\Models\Post;
use App\Models\Question;
use App\Models\Redcol;
use App\Models\Review;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(\auth()->id() != null){

        }

        return(view('index'));
    }
    public function course()
    {
        return(view('course'));
    }
    public function contacts(){
        $content = About::find(1);
        return(view('contact', compact('content')));
    }
    public function news(){
        $news = News::orderBy('date', 'desc')->paginate(6);
        return(view('news', compact('news')));
    }

    public function about(){

        return(view('about'));
    }

    public function faq(){
        $faqs = Question::all();
        $i=1;
        return(view('faq', compact('faqs')));
    }

    public function shop(){
        return(view('shop'));
    }
    public function search(Request $request){

        return(view('search'));
    }



}
