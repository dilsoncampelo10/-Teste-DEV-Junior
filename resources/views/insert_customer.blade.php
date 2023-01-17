@extends('templates/main')
@section('title','Home')

@section('content')

<form action="" method="post">
    <input type="text" name="name" id="name">
    <input type="tel" name="phone" id="phone">
    <input type="text" name="address" id="address">
    <input type="date" name="birthdate" id="birthdate">
    <input type="text" name="cpf" id="cpf">

</form>

@endsection