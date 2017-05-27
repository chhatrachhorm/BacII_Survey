<?php
namespace App\Http\SurveyViewComposers;
use Illuminate\View\View;
use DB;
class SurveyComposer{
  public function compose(View $view){
    for($id=1; $id<=16; $id++){
      $answers[$id]=DB::select('select * from answers where q_id = :id', ['id'=>$id]);
      $questions[$id]=DB::select('select * from questions where q_id = :id', ['id'=>$id]);
    }
    //$answers = DB::select('select * from answers where q_id = :id', ['id'=>1]);
    $view->with('answers', $answers);
    $view->with('questions', $questions);
  }
}
