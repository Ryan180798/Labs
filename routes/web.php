<?php

use Illuminate\Support\Facades\Route;
use App\Menu;
use App\Carousel;
use App\Contact;
use App\Ready;
use App\Team;
use App\Presentation;
use App\Testimonial;
use App\Service;
use App\Article;
use App\Message;
use App\Serviceprime;
use App\Footer;
use App\Video;

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
////////////////////Menu/////////////////////
Route::get('/homes', function () {
    $menu = Menu::find(1);
    $carousels = Carousel::all();
    $contact = Contact::find(1);
    $ready = Ready::find(1);
    $teams = Team::all();
    $presentation = Presentation::find(1);
    $testimonials = Testimonial::all();
    $services = Service::all();
    $messages = Message::all();
    $footer = Footer::find(1);
    $video = Video::find(1);

    return view('/templates/homes',compact('menu','carousels','contact','ready','teams','presentation','testimonials','services','messages','footer','video'));
});

Route::get('/blog', function () {
    $articles = Article::all();

    return view('/templatesBis/blog',compact('articles'));
});


Route::get('/services', function () { 
    $serviceprime = Serviceprime::find(1);
    return view('/templatesBis/services',compact('serviceprime'));
});

Route::get('/contact', function () {
    $messages = Message::all();
    return view('/templatesBis/contact',compact('messages'));
});

Route::get('/elements', function () {
    return view('/templatesBis/elements');
});
/////////////////////////////////////////////////






Route::get('/', function () {
    $menu = Menu::find(1);
    $carousels = Carousel::all();
    $contact = Contact::find(1);
    $ready = Ready::find(1);
    $teams = Team::all();
    $presentation = Presentation::find(1);
    $testimonials = Testimonial::all();
    $services=Service::all();
    $articles = Article::all();
    $messages = Message::all();
    $serviceprime = Serviceprime::find(1);
    $footer = Footer::find(1);
    $video = Video::find(1);


    return view('index',compact('menu','carousels','contact','ready','teams','presentation','testimonials','services','articles','messages','serviceprime','footer','video'));
})->name('index');





Route::get('/menu', function () {
    return view('admin/page-home/menu/index');
});

Route::get('/vidéo', function () {
    $video = Video::find(1);
    return view('admin/page-home/video/index',compact('video'));
});

Route::get('/bannière', function () {
    $carousels = Carousel::all();
    return view('admin/page-home/bannière/carousel/index',compact('carousels'));
});

Route::get('/team', function () {
    $teams = Team::all();
    return view('admin/page-home/team/index',compact('teams'));
});

Route::get('/testimonial', function () {
    $testimonials = Testimonial::all();
    return view('admin/page-home/testimonials/index',compact('testimonials'));
});

//////////////////////////////////////////////////////////////////////////////////////
Route::get('/service', function () {
    $services = Service::all();
    $serviceprime = Serviceprime::find(1);
    $footer = Footer::find(1);
    return view('admin/page-home/servicess/index',compact('services','serviceprime','footer'));
});
Route::get('/serviceprime', function () {
    $services = Service::all();
    $serviceprime = Serviceprime::find(1);
    return view('admin/page-services/serviceprime/index',compact('services','serviceprime'));
});
///////////////////////////////////////////////////////////////////////////////////////

Route::get('/article', function () {
    $articles = Article::all();
    return view('admin/page-blog/articles/index',compact('articles'));
});


Route::resource('carousel','CarouselController');
Route::resource('team','TeamController');
Route::resource('testimonial','TestimonialController');
Route::resource('service','ServiceController');
Route::resource('article','ArticleController');

Route::post('/message', 'MessageController@store')->name('message.store');
Route::get('/admin/message/index', 'MessageController@index')->name('message.index');

Route::get('/admin/page-home/contact/index', 'ContactController@edit')->name('contact');
Route::post('/admin/page-home/contact/index/update', 'ContactController@update')->name('contact.update');

Route::get('/admin/page-home/menu/index', 'MenuController@edit')->name('menu');
Route::post('/admin/page-home/menu/index/update', 'MenuController@update')->name('menu.update');

// Route::get('/contact', 'ContactController@index');
// Route::post('/contact', 'ContactController@store');

Route::get('/admin/page-home/ready/index', 'ReadyController@edit')->name('ready');
Route::post('/admin/page-home/ready/index/update', 'ReadyController@update')->name('ready.update');

Route::get('/admin/page-home/vidéo/index', 'VideoController@edit')->name('video');
Route::post('/admin/page-home/vidéo/index/update', 'VideoController@update')->name('video.update');

Route::get('/admin/page-home/présentation/index', 'PresentationController@edit')->name('presentation');
Route::post('/admin/page-home/présentation/index/update', 'PresentationController@update')->name('presentation.update');

Route::get('/admin/page-services/serviceprime/index', 'ServiceprimeController@edit')->name('serviceprime');
Route::post('/admin/page-services/serviceprime/index/update', 'ServiceprimeController@update')->name('serviceprime.update');

Route::get('/admin/page-footer/index', 'FooterController@edit')->name('footer');
Route::post('/admin/page-footer/index/update', 'FooterController@update')->name('footer.update');

// Route::get('admin/page-home/menu/edit', 'CarouselController@edit')->name('carousel');
// Route::post('admin/page-home/menu/index/update', 'CarouselController@update')->name('carousel.update');


///////////////////////LOGIN///////////////////////////////
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
