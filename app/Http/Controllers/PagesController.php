<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
//     public function test(){
//     // $answers = DB::select('select * from answers where q_id = :id', ['id'=>1]);
//     // return view('skillsurvey.testdb', compact($answers));
//     for ($id=1; $id <= 16; $id++) {
//       $answers[$id] = DB::select('select * from answers where q_id = :id',['id'=>$id]);
//     }
//     // print_r($answers[1][1]->ans_desc);
//     return view('skillsurvey.test1')->with('answers', $answers);
//     // return view::make('skillsurvey.testdb')->with('answers', $answers);
//     }
}
