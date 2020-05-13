<?php

use Illuminate\Support\Facades\Route;
use App\Menu;
use App\Carousel;
use App\Video;
use App\Contact;
use App\Ready;
use App\Team;
use App\Presentation;
use App\Testimonial;
use App\Service;

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
    $carousels = Carousel::all();
    $contact = Contact::find(1);
    $ready = Ready::find(1);
    $teams = Team::all();
    $presentation = Presentation::find(1);
    $testimonials = Testimonial::all();
    $services = Service::all();

    return view('/templates/homes',compact('carousels','contact','ready','teams','presentation','testimonials','services'));
});

Route::get('/blog', function () {
    return view('/templatesBis/blog');
});

Route::get('/services', function () {
    return view('/templatesBis/services');
});

Route::get('/contact', function () {
    return view('/templatesBis/contact');
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


    return view('index',compact('menu','carousels','contact','ready','teams','presentation','testimonials','services'));
})->name('index');



Route::get('/admin', function () {
    $carousels = Carousel::all();
    $contact = Contact::find(1);
    $ready = Ready::find(1);
    $teams = Team::all();
    $presentation = Presentation::find(1);
    $testimonials = Testimonial::all();
    $services=Service::all();

    return view('admin.index',compact('carousels','contact','ready','teams','presentation','testimonials','services'));
})->name('admin');


Route::get('/menu', function () {
    return view('admin/page-home/menu/index');
});

Route::get('/vidéo', function () {
    return view('admin/page-home/vidéo/index');
});

Route::resource('/admin/page-home/vidéo/index','VideoController');

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

Route::get('/service', function () {
    $services = Service::all();
    return view('admin/page-home/servicess/index',compact('services'));
});


Route::resource('carousel','CarouselController');
Route::resource('team','TeamController');
Route::resource('testimonial','TestimonialController');
Route::resource('service','ServiceController');


Route::get('/admin/page-home/contact/index', 'ContactController@edit')->name('contact');
Route::post('/admin/page-home/contact/index/update', 'ContactController@update')->name('contact.update');

Route::get('/admin/page-home/ready/index', 'ReadyController@edit')->name('ready');
Route::post('/admin/page-home/ready/index/update', 'ReadyController@update')->name('ready.update');

Route::get('/admin/page-home/présentation/index', 'PresentationController@edit')->name('presentation');
Route::post('/admin/page-home/présentation/index/update', 'PresentationController@update')->name('presentation.update');

// Route::get('admin/page-home/menu/edit', 'CarouselController@edit')->name('carousel');
// Route::post('admin/page-home/menu/index/update', 'CarouselController@update')->name('carousel.update');


///////////////////////LOGIN///////////////////////////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
