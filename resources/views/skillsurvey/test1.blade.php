@extends('layout.qmaster')
@section('desc', '4')
@section('title', 'test DB')
@section('survey')
<div class="row">
      <div class="col s12 m5">
        <div class="card-panel #212121 pink darken-4">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>

          <!-- @foreach($answers[1] as $answer)
            ans_desc: {{$answer -> ans_desc}}
            <br>
            ans_id: {{$answer -> ans_id}}
            <br>
            q_id: {{$answer -> q_id}}
            <br>
          @endforeach
          <br>
          ans_desc1: {{$answers[1][1]->ans_desc}} -->
        </div>
      </div>
</div>

@endsection
