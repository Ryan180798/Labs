<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index(){

        $messages = Message::all();
            return view ('/admin/message/index',compact('messages')); 
    }

    public function store(){

        $message = new Message();


            $message->nom = request('nom');
            $message->email = request('email');
            $message->sujet = request('sujet');
            $message->message = request('message');
    
            $message->save();
    
            return redirect()->route('index');
    }   
}
