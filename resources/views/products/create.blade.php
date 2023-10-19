@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Producto</div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="string" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="double" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="integer" name="stock" id="stock" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Categoría</label>
                            <input type="string" name="category" id="category" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="provider">Proveedor</label>
                            <input type="string" name="provider" id="provider" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection