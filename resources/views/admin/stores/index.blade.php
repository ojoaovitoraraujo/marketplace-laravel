@extends('layouts.app')

@section('content')

    <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success my-5">Criar Loja</a>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr> 
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>
                    <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn sm btn-warning">Editar</a>
                    <a href="{{route('admin.stores.destroy', ['store' => $store->id])}}" class="btn sm btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}

@endsection