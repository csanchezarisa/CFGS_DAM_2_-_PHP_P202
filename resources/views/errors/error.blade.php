@extends('..layouts.master')

@section('title')
    {{$titolPagina}}
@endsection

@section('header')
    ERROR: No es pot realitzar la operació. <br>
    Motiu: {{$motiu}}.
@endsection

@section('content')
    Dígits introduits: <strong>{{$primerNumero}}</strong> i <strong>{{$segonNumero}}</strong>
@endsection