<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DayInHistoryController;
use App\Http\Controllers\Admin\PictureWeekController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\RedcolController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\PaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/course', [App\Http\Controllers\HomeController::class, 'course'])->name('course');

Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');
Route::post('/favorite', [App\Http\Controllers\HomeController::class, 'favorite'])->name('favorite');
Route::get('/news', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/news/{id}', [App\Http\Controllers\HomeController::class, 'news_post'])->name('news.post');

Route::get('/journal/post/{id}', [App\Http\Controllers\HomeController::class, 'post'])->name('journal.post');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/about/person/{id}', [App\Http\Controllers\HomeController::class, 'about_person'])->name('about.person');
Route::get('/pictures', [App\Http\Controllers\HomeController::class, 'pictures'])->name('pictures');
Route::get('/picture/{id}', [App\Http\Controllers\HomeController::class, 'picture'])->name('picture');
Route::get('/dayinhistory', [App\Http\Controllers\HomeController::class, 'dayinhistory'])->name('dayinhistory');
Route::get('/archive/journals', [App\Http\Controllers\HomeController::class, 'journalarchive'])->name('journalarchive');
Route::get('/archive/journal/{id}', [App\Http\Controllers\HomeController::class, 'archivejournal'])->name('archivejournal');
Route::get('/archive/videos', [App\Http\Controllers\HomeController::class, 'videoarchive'])->name('videoarchive');
Route::get('/archive/video/{id}', [App\Http\Controllers\HomeController::class, 'video'])->name('video');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
//Route::get('/reviews', [App\Http\Controllers\HomeController::class, 'reviews'])->name('reviews');
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/search/news', [App\Http\Controllers\HomeController::class, 'newssearch'])->name('news.search');
Route::get('/search/posts', [App\Http\Controllers\HomeController::class, 'postssearch'])->name('posts.search');
Route::get('/personal/login', [App\Http\Controllers\Personal\HomeController::class, 'login'])->name('personal.login');
Route::post('/personal/login', [App\Http\Controllers\Personal\LoginController::class, 'login']);
Route::get('/personal/register', [App\Http\Controllers\Personal\HomeController::class, 'register'])->name('personal.register');
Route::post('/personal/register', [App\Http\Controllers\Personal\RegisterController::class, 'save']);
Route::get('/personal/reset', [App\Http\Controllers\Personal\HomeController::class, 'reset'])->name('personal.reset');
Route::post('/personal/reset', [App\Http\Controllers\Personal\LoginController::class, 'reset']);
Route::get('/personal/logout', function(){
    Auth::logout();
    return redirect(route('home'));
})->name('personal.logout');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'indexAdmin'])->name('homeAdmin');
    Route::get('/about/contact', [App\Http\Controllers\Admin\AboutController::class, 'contact'])->name('about.contact');

    Route::resource('dayinhistory', DayInHistoryController::class);
    Route::resource('pictureweek', PictureWeekController::class);
    Route::resource('news', NewsController::class);
    Route::resource('journal', JournalController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('post', PostController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('about', AboutController::class);
    Route::resource('redcol', RedcolController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('category', CategoryController::class);

});
Route::middleware(['role:admin|user'])->prefix('personal')->group(function () {
    Route::get('/account', [App\Http\Controllers\Personal\HomeController::class, 'account'])->name('personal_account');
    Route::post('/settingssave', [App\Http\Controllers\Personal\HomeController::class, 'settingssave'])->name('personal_settingssave');
    Route::get('/card', [App\Http\Controllers\Personal\HomeController::class, 'card'])->name('personal_card');
    Route::get('/subscription', [App\Http\Controllers\Personal\HomeController::class, 'subscription'])->name('personal_subscription');
    Route::get('/favorites_article', [App\Http\Controllers\Personal\HomeController::class, 'favoritesArticle'])->name('favorites_article');
    Route::get('/statistic', [App\Http\Controllers\Personal\HomeController::class, 'statistic'])->name('personal_statistic');
    Route::get('/shop', [App\Http\Controllers\Personal\HomeController::class, 'shop'])->name('personal_shop');
    Route::post('/payJournal', [App\Http\Controllers\Personal\HomeController::class, 'payJournal']);
});
Route::match(['GET', 'Post'], '/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('/payment/create', [PaymentController::class, 'create'])->name('payment.create');

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Кэш очищен.";
});

