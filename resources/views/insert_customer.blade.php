@extends('templates/main')
@section('title','Home')

@section('content')

<form action="{{route('save.customer')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Digite seu nome">
    <input type="tel" name="phone" id="phone" placeholder="Digite seu telefone">
    <input type="text" name="address" id="address" placeholder="Digite seu endereço">
    <input type="date" name="birthdate" id="birthdate">
    <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
    <input type="submit" value="Cadastrar">

</form>

@endsection