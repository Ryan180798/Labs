<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ready;

class ReadyController extends Controller
{
    public function edit(){
        
        $ready = Ready::all();

        if ($ready != null) {
            return view('admin/page-home/ready/index', compact('ready'));
         } 
            else {
            return view('admin/page-home/ready/index'); 
            }
    }



    public function update(){

        $ready = Ready::all();

        if ($ready != null) {
                    $ready->titreReady = request('titreReady');
                    $ready->sousTitreReady = request('sousTitreReady');
                    $ready->buttonReady = request('buttonReady');

                    $ready->save();
                    return redirect()->route('admin');
                }


            
            else {
                $ready = new Ready();

                $ready->titreReady = request('titreReady');
                $ready->sousTitreReady = request('sousTitreReady');
                $ready->buttonReady = request('buttonReady');
        
                $ready->save();
        
                return redirect()->route('admin');

            }
    }
}
