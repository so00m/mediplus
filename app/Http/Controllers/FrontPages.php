<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontPages extends Controller
{
    public function home(){
        return view('home');
    }

    public function portfolio(){
      
        return view('portfolio-details');
    }


    public function err404(){
        return view('404');
    }



    public function blogs(){
        return view('blogs');
    }

    public function blogDetails(){
      
        return view('blogDetails');
    }

    public function contact(){
        
        return view('contact');
    }

    public function services(){
        return view('services');
    }

    public function appointment(){
        return view('appointment');
    }
    

}
