@extends('templates/main')
@section('title','Home')

@section('content')

<form action="{{route('udpate.customer')}}" method="post">
    @csrf
    @method('put')
    <input type="hidden" name="id" value="{{$customer->id}}">
    <input type="text" name="name" id="name" placeholder="Digite seu nome" value="{{$customer->name}}">
    <input type="tel" name="phone" id="phone" placeholder="Digite seu telefone"  value="{{$customer->phone}}">
    <input type="text" name="address" id="address" placeholder="Digite seu endereço"  value="{{$customer->address}}">
    <input type="date" name="birthdate" id="birthdate"  value="{{$customer->birthdate}}">
    <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF"  value="{{$customer->cpf}}">
    <input type="submit" value="Editar">

</form>

@endsection