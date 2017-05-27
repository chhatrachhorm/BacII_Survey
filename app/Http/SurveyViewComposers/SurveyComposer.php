<?php
namespace App\Http\SurveyViewComposers;
use Illuminate\View\View;
use DB;
class SurveyComposer{
  public function compose(View $view){
    $answers = DB::select('select * from answers where q_id = :id', ['id'=>1]);
    $view->with('answers', $answers);
    $view->with('A', 'B');
    $view->with('Z', 1);
  }
}
