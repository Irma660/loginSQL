@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Producto</div>

                <div class="card-body">
                    <h4>Nombre: {{ $product->name }}</h4>
                    <h4>Precio: {{ $product->price }}</h4>
                    <h4>Descripción: {{ $product->description }}</h4>
                    <h4>Stock: {{ $product->stock }}</h4>
                    <h4>Categoría: {{ $product->category }}</h4>
                    <h4>Proveedor: {{ $product->provider }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
