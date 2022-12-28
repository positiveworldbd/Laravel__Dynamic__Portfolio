<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    // Index Method
    public function Index(){
        return view('about');
    }

    // Contact Method
    public function contactMethod(){
        return view('contact');
    }

    // Blog Method
    public function blogMethod (){
       return view('blog'); 
    }
}
