<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function survey(){
      return view('skillsurvey.survey');
    }
    public function getData(Request $request){
      $input = $request->all();
      for ($j = 0; $j < 160; $j++) {
        $anskey[$j] = "ans".$j;
      }

      $total = [];
      for ($i=0,$k=0; $i < 16; $i++) {
        for (; $k < 10 * ($i+1); $k++) {
          if (array_key_exists($anskey[$k], $input)) {
            $total[$i] += $input[$anskey[$k]];
          }
          else {
            $input[$anskey[$k]] = 0;
          }
        }
      }
      print_r($total[15]);
      // $v = $input[$anskey[159]];

      // return $request->all();
    }
}
