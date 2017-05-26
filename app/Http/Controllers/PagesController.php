<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
    	return view("welcome");
    }
    public function survey(){
    	return view("skillsurvey.survey");
    }
    public function contact(){
    	return view("skillsurvey.contact");
    }
    public function about(){
    	return view("skillsurvey.about");
    }
}
