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
@endsection
