@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="text-center">Products</h3>
        </div>
    </div>
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <h4 class="text-center">Info Producto</h4>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-6">
                        <label for="">Categoria</label>
                        <select type="text" class="form-control" name="categoria">
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-6">
            </div>
        </div>
    </form>
@endsection