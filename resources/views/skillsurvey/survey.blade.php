@extends('layout.qmaster')
@section('desc', 'Take the survey and you will know what career fits you the most!')
@section('title', 'survey')
@section('survey')
<h1>Test</h1>
<ol>
@foreach( $answers as $x)
<li>{{ $x -> ans_desc }}</li>
@endforeach
</ol>
@endsection
