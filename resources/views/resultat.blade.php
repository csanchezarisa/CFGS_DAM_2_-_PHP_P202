@extends('layouts.master')

@section('title')
    {{$titolPagina}}
@endsection

@section('header')
    {{$primerNumero}} {{$operacioRealitzada}} {{$segonNumero}} = {{$resultat}}
@endsection

@section('content')
    Has realitzat una <strong>{{$titolPagina}}</strong> de dos números: <br>
    El primer dels dígits és {{$primerNumero}} i el segon és {{$segonNumero}}.
@endsection