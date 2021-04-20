@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>

    <form action="{{route('admin.products.store')}}" method="post">
        @csrf   {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        <div class="form-group">
            <label for="">Nome do Produto</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" class="form-control" name="description">
        </div>

        <div class="form-group">
            <label for="">Conteúdo</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="">Preço</label>
            <input type="text" class="form-control" name="price">
        </div>

        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug">
        </div>

        <div class="form-group">
            <label for="">Lojas</label>
            <select name="store" class="form-control">
                @foreach($stores as $store)
                <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
        </div>
    </form>
@endsection