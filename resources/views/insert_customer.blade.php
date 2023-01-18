@extends('templates/main')
@section('title','Home')

@section('content')

<div class="container">
    <h1>+ Cadastrar clientes</h1>
    <hr>
    <form action="{{route('save.customer')}}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Digite seu nome" class="form-control">
        <input type="tel" name="phone" id="phone" placeholder="Digite seu telefone" class="form-control mt-3">
        <input type="text" name="address" id="address" placeholder="Digite seu endereço" class="form-control mt-3">
        <input type="date" name="birthdate" id="birthdate" class="form-control mt-3">
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="form-control mt-3" id="cpf">

        <button type="submit" class="btn btn-primary mt-3"><i class="fa-sharp fa-solid fa-plus"></i> Cadastrar</button>

    </form>


</div>
<script src="https://unpkg.com/imask"></script>
<script>
    IMask(
        document.getElementById('cpf'), {
            mask: '000.000.000-00'
        }
    )
</script>
@endsection