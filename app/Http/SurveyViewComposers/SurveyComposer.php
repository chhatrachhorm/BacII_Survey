<?php
namespace App\Http\SurveyViewComposers;
use Illuminate\View\View;
use DB;
class SurveyComposer{
  public function compose(View $view){
    for($id=0; $id<16; $id++){
      $answers[$id]=DB::select('select * from answers where q_id = :id', ['id'=>($id+1)]);
      $questions[$id]=DB::select('select * from questions where q_id = :id', ['id'=>($id+1)]);
    }
    // print_r($answers[0]);
    // print_r($questions[0]);
    //$answers = DB::select('select * from answers where q_id = :id', ['id'=>1]);
    $view->with('answers', $answers);

    $view->with('questions', $questions);

  }
}
