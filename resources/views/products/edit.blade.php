@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Producto</div>

                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="double" name="price" id="price" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" id="description" class="form-control" value="{{ $product->description }}">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="integer" name="stock" id="stock" class="form-control" value="{{ $product->stock }}">
                        </div>
                        <div class="form-group">
                            <label for="category">Categoría</label>
                            <input type="string" name="category" id="category" class="form-control" value="{{ $product->category }}">
                        </div>
                        <div class="form-group">
                            <label for="provider">Proveedor</label>
                            <input type="string" name="provider" id="provider" class="form-control" value="{{ $product->provider }}">
                        </div>



                        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection