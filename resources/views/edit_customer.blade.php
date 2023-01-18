@extends('templates/main')
@section('title','Editar cliente')

@section('content')

<div class="container">
    <h1>+ Editar cliente</h1>
    <hr>
    <form action="{{route('udpate.customer')}}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{$customer->id}}" class="form-control">
        <input type="text" name="name" id="name" placeholder="Digite seu nome" value="{{$customer->name}}" class="form-control mt-3">
        <input type="tel" name="phone" id="phone" placeholder="Digite seu telefone" value="{{$customer->phone}}" class="form-control mt-3">
        <input type="text" name="address" id="address" placeholder="Digite seu endereço" value="{{$customer->address}}" class="form-control mt-3">
        <input type="date" name="birthdate" id="birthdate" value="{{$customer->birthdate}}" class="form-control mt-3">
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" value="{{$customer->cpf}}" class="form-control mt-3">
        <button type="submit" class="btn btn-primary mt-3"><i class="fa-solid fa-pen-to-square"> </i> Editar</button>

    </form>
</div>

@endsection