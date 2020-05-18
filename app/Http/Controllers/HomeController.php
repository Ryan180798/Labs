<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
            return view('admin.index',compact('carousels','contact','ready','teams','presentation','testimonials','services','articles','messages','serviceprime','footer'));
        
    }
}
