@extends('layout.wmaster')
@section('desc', "Don't know what to study after finishing high school? Skillpicker Can Be the best Helper!")
@section('title', 'SkillPicker')
@section('Content')
<div class="row">
  <div class="col s12 Center">
    <h1 class="title">ដំណើរផ្សងព្រេង​នៃជីវិត</h1>
    <a href="survey" class="waves-effect waves-light btn-large z-depth-2 Button" id="BTN"><i class="material-icons left">play_arrow</i>ចាប់ផ្តើម</a>
  </div>
</div>
<div class="fixed-action-btn toolbar animated bounceInDown">
<a class="btn-floating btn-large #0d47a1 blue darken-3">
  <i class="large material-icons">menu</i>
</a>
<ul>
  <li class="waves-effect waves-light"><a href="survey">Survey</a></li>
  <li class="waves-effect waves-light"><a href="#!">About</a></li>
  <li class="waves-effect waves-light"><a href="#!">Contact</a></li>
</ul>
</div>
@endsection
