<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Menu;

class MenuController extends Controller
{
    public function edit(){
        
        $menu = Menu::find(1);

        if ($menu != null) {
            return view('admin/page-home/menu/index', compact('menu'));
         } 
            else {
            return view('admin/page-home/menu/index');
            }


        return view('admin/page-home/menu/index');
    }



    public function update(){

        $menu = Menu::find(1);

        if ($menu != null) {


                if(request('logo') != null){
                    $menu->logo = request('logo')->store('img');
                }


                $menu->lien1 = request('lien1');
                $menu->lien2 = request('lien2');
                $menu->lien3 = request('lien3');
                $menu->lien4 = request('lien4');
                
                $menu->save();
                return redirect()->route('admin');
            }
            else {
                $menu = new Menu();

                $menu->logo = request('logo')->store('img');
                $menu->lien1 = request('lien1');
                $menu->lien2 = request('lien2');
                $menu->lien3 = request('lien3');
                $menu->lien4 = request('lien4');
        
                $menu->save();
        
                return redirect()->route('admin');  

            }
}
}

