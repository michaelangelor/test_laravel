@extends('layout.master')
@section('content')
<h1>{{$name===null ? 'Rate my gears.' : $name .' is great!'}}</h1>
@stop
