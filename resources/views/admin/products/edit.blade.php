@extends('layouts.app')

@section('content')
    <h1>Atualizar Produto</h1>

    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post">
        @csrf            {{--  <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        @method("PUT")   {{-- <input type="hidden" name="_method" value="PUT"> --}}

        <div class="form-group">
            <label for="">Nome do Produto</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}">
        </div>

        <div class="form-group">
            <label for="">Conteúdo</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$product->body}}</textarea>
        </div>

        <div class="form-group">
            <label for="">Preço</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
        </div>

        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" class="form-control" name="slug" value="{{$product->slug}}">
        </div>

        
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Atualizar Produto</button>
        </div>
    </form>
@endsection