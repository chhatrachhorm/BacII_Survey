@extends('layout.wmaster')
@section('css', 'css/css/welcome.css')
@section('description', "Don't know what to study after finishing high school? Skillpicker Can Be the best Helper!")
@section('title', 'SkillPicker')
@section('bottom-nav')
<li class="waves-effect waves-light"><a href="survey">Survey</a></li>
<li class="waves-effect waves-light"><a href="about">About</a></li>
<li class="waves-effect waves-light"><a href="contact">Contact</a></li>
@endsection
@section('Content')
<div class="row">
  <div class="col s12 Center">
    <h1 class="title">ដំណើរផ្សងព្រេង​នៃជីវិត</h1>
    <a href="survey" class="waves-effect waves-light btn-large z-depth-2 Button" id="BTN"><i class="material-icons left">play_arrow</i>ចាប់ផ្តើម</a>
  </div>
</div>
@endsection
@section('jsscript')
<script type="text/javascript" src="js/weventanimate.js"></script>
@endsection
