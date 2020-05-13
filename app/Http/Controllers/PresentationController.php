<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;

class PresentationController extends Controller
{
    public function edit(){
        
        $presentation = Presentation::find(1);

        if ($presentation != null) {
            return view('admin/page-home/présentation/index', compact('presentation'));
         } 
            else {
            return view('admin/page-home/présentation/index'); 
            }
    }



    public function update(){

        $presentation = Presentation::find(1);

        if ($presentation != null) {
                    $presentation->titrePresentation = request('titreP');
                    $presentation->textePresentation = request('texteP');
                    $presentation->buttonPresentation = request('buttonP');

                    $presentation->save();
                    return redirect()->route('admin');
                }


            
            else {
                $presentation = new Presentation();

                $presentation->titrePresentation = request('titreP');
                $presentation->textePresentation = request('texteP');
                $presentation->buttonPresentation = request('buttonP');
        
                $presentation->save();
        
                return redirect()->route('admin');

            }
    }
}
