<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\footer;

class FooterController extends Controller
{
    public function edit(){
        
        $footer = Footer::find(1);

        if ($footer != null) {
            return view('admin/page-footer/index', compact('footer'));
         } 
            else {
            return view('admin/page-footer/index'); 
            }
    }



    public function update(){

        $footer = Footer::find(1);

        if ($footer != null) {
                    $footer->texte = request('texte');

                    $footer->save();
                    return redirect()->route('admin');
                }


            
            else {
                $footer = new Footer();

                $footer->texte = request('texte');
        
                $footer->save();
        
                return redirect()->route('admin');

            }
    }
}
