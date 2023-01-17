@extends('templates/main')
@section('title','Home')

@section('content')

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Data de nascimento</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->birthdate}}</td>
                <td>{{$customer->cpf}}</td>
                <td>
                    <a href="{{route('edit.customer',['id'=>$customer->id])}}">Editar</a>
                    <form action="{{route('delete.customer',['id'=>$customer->id])}}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection