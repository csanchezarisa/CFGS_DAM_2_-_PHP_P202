@extends('layouts.master')

@section('title')
    Calculadora
@endsection

@section('header')
    CALCULADORA 🖩
@endsection

@section('content')
    <input type="text" id="operand1" class="form-control" placeholder="Primer Operand"/> <input type="text" id="operand2" class="form-control" placeholder="Segon Operand"/> <br>
    <button class="btn btn-primary" id="suma">Suma</button>
    <button class="btn btn-success" id="resta">Resta</button>
    <button class="btn btn-info" id="multiplica">Multiplica</button>
    <button class="btn btn-warning" id="divideix">Divideix</button>
@endsection