<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function test(){
      return view('skillsurvey.survey');
    }
}