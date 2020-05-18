<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Video;

class VideoController extends Controller
{
    public function edit(){
        
        $video = Video::find(1);

        if ($video != null) {
            return view('admin/page-home/video/index', compact('video'));
         } 
            else {
            return view('admin/page-home/video/index');
            }


        return view('admin/page-home/video/index');
    }



    public function update(){

        $video = Video::find(1);

        if ($video != null) {


                if(request('url') != null){
                    $video->url = request('url');
                }
                
                $video->save();
                return redirect()->route('admin');
            }
            else {
                $video = new Video();

                $video->url = request('url');
        
                $video->save();
        
                return redirect()->route('admin');  

            }
}
}
