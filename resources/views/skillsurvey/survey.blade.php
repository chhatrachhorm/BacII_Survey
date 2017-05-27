@extends('layout.qmaster')
@section('desc', 'Take the survey and you will know what career fits you the most!')
@section('title', 'survey')
@section('survey')
<div class="row">
      <div class="col s12 m5">
        <div class="card-panel #212121 grey darken-4">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
</div>
<h1>Test</h1>
<ol>
@foreach( $answers as $x)
<li>{{ $x -> ans_desc }}</li>
@endforeach
</ol>
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul>
@endsection
