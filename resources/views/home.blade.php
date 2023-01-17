@extends('templates/main')
@section('title','Home')

@section('content')
    <a href="{{route('insert.customer')}}">Cadastrar clientes</a>
    <a href="{{route('show.customers')}}">Visualizar clientes</a>

@endsection