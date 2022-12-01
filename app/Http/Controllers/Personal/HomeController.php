<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\DayInHistory;
use App\Models\Journal;
use App\Models\Likepost;
use App\Models\News;
use App\Models\Payjournal;
use App\Models\PictureWeek;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index()
    {

    }
    public function login()
    {
        if(Auth::check()){
            return redirect(route('personal_settings'));
        }

        return(view('personal.login'));
    }
    public function register()
    {
        return(view('personal.register'));
    }
    public function reset(Request $request){
        $email = $request->email;
        return(view('personal.reset', compact('email')));
    }
    public function account(){
        return(view('personal.account'));
    }
    public function settingssave(Request $request){
            $user = User::find(\auth()->id());
            $user->first_name = $request->name;
            $user->email = $request->email;
            if($request->password !== null){
                $user->password = $request->password;
            }
            $user->save();

        return redirect(route('personal_settings'));
    }
    public function card(){
        $month_list = array(
            1  => 'январь',
            2  => 'февраль',
            3  => 'март',
            4  => 'апрель',
            5  => 'май',
            6  => 'июнь',
            7  => 'июль',
            8  => 'август',
            9  => 'сентябрь',
            10 => 'октябрь',
            11 => 'ноябрь',
            12 => 'декабрь'
        );

        $journals = DB::table('journals')
            ->join('payjournals', 'payjournals.journal_id', '=', 'journals.id')
            ->where('payjournals.user_id', (int)\auth()->id())
            ->get();


        return(view('personal.card', compact('month_list','journals')));
    }
    public function shop(Request $request){
        $month_list = array(
            1  => 'январь',
            2  => 'февраль',
            3  => 'март',
            4  => 'апрель',
            5  => 'май',
            6  => 'июнь',
            7  => 'июль',
            8  => 'август',
            9  => 'сентябрь',
            10 => 'октябрь',
            11 => 'ноябрь',
            12 => 'декабрь'
        );

        $payjournalsArr = DB::table('payjournals')->select('journal_id')->where('user_id','=', (int)\auth()->id())->get()->toArray();
        $payjournalsArrRes = array();
        foreach($payjournalsArr as $r){
            $payjournalsArrRes[] = $r->journal_id;
        }

        if(isset($request->headerSearch)){
            $search = $request->headerSearch;
            $posts = Post::where('title', 'LIKE', "%$search%")->where('publish', 1)->get();
            $journals = Journal::where('title', 'LIKE', "%$search%")->where('publish', 1)->get();
            $journalSearchIdArr = array();

            foreach($posts as $post){
                $journalSearchIdArr[] = $post->journal_number;
            }

            foreach($journals as $journal){
                if(!isset($journalSearchIdArr[$journal->number])){
                    $journalSearchIdArr[] = $journal->number;
                }
            }

            $journals = Journal::where('publish', 1)->whereIn('number', $journalSearchIdArr)->whereNotIn('id', $payjournalsArrRes)->orderBy('number', 'desc')->paginate(12);
            }else{
            $journals = Journal::where('publish', 1)->whereNotIn('id', $payjournalsArrRes)->orderBy('number', 'desc')->paginate(12);
            }

        return(view('personal.shop',compact('month_list','journals')));
    }

    public function subscription(){
        return(view('personal.subscription'));
    }
    public function favoritesArticle(){
        $postsArrRes = array();
        $daysArrRes = array();
        $newsArrRes = array();
        $picturesArrRes = array();

        $postsArr = Likepost::where('user_id', \auth()->id())->get();

        foreach($postsArr as $r){
            if(isset($r->post_id))
                $postsArrRes[] = $r->post_id;

            if(isset($r->day_id))
                $daysArrRes[] = $r->day_id;

            if(isset($r->news_id))
                $newsArrRes[] = $r->news_id;

            if(isset($r->picture_id))
                $picturesArrRes[] = $r->picture_id;
        }
        $posts = Post::whereIn('id', $postsArrRes)->get();
        $days = DayInHistory::whereIn('id', $daysArrRes)->get();
        $news = News::whereIn('id', $newsArrRes)->get();
        $pictures = PictureWeek::whereIn('id', $picturesArrRes)->get();

        return(view('personal.favorites_article', compact('posts','days','news','pictures')));
    }
    public function statistic(){
        $journal_count = DB::table('payjournals')->where('user_id', \auth()->id())->count();
        return(view('personal.statistic', compact('journal_count')));
    }

    public function payJournal(Request $request){
        $journal_id = (int)$request->journal_id;
        $user_id = (int)$request->user_id;

        $res = Payjournal::create([
            'journal_id' => $journal_id,
            'user_id' => $user_id,
        ]);

        $user = User::find($user_id);
        $user->count_journal_free -= 1;
        $user->count_journal_pay += 1;
        $user->save();


        echo json_encode($res);
    }

}
