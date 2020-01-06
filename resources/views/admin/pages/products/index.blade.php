@extends('admin.layouts.app')

@section('title','Gestão de Produtos')

@section('content')
    <h1>Exibindo os produtos</h1>

    <a href="{{ route('products.create') }}">Cadastrar</a>
    
    {{$teste}}
@endsection

