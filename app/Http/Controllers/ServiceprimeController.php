<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serviceprime;

class ServiceprimeController extends Controller
{
    public function edit(){
        
        $serviceprime = Serviceprime::find(1);

        if ($serviceprime != null) {
            return view('admin/page-services/serviceprime/index', compact('serviceprime'));
         } 
            else {
            return view('admin/page-services/serviceprime/index'); 
            }
    }



    public function update(){

        $serviceprime = Serviceprime::find(1);

        if ($serviceprime != null) {
                    $serviceprime->titre = request('titre');
                    $serviceprime->button = request('button');

                    $serviceprime->save();
                    return redirect()->route('admin');
                }


            
            else {
                $serviceprime = new Serviceprime();

                $serviceprime->titre = request('titre');
                $serviceprime->button = request('button');
        
                $serviceprime->save();
        
                return redirect()->route('admin');

            }
    }
}
