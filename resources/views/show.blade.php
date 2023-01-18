@extends('templates/main')
@section('title','Home')

@section('content')

<div class="container mt-3">
    <h1>Clientes cadastrados</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">CPF</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>{{date('d/m/Y',strtotime($customer->birthdate))}}</td>
                <td>{{$customer->cpf}}</td>
                <td class="d-flex">
                    <a href="{{route('edit.customer',['id'=>$customer->id])}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                    <form action="{{route('delete.customer',['id'=>$customer->id])}}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger ms-2" onclick="return confirm('Deseja excluir?')"><i class="fa-solid fa-trash"></i> Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection