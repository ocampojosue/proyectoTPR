{{-- <form action="{{url('/product')}}" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <input type="submit" value="Agregar">
</form> --}}
@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('message'))
            <div class="alert alert success">
                <h3></h3>
            </div>
        @endif
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>                    
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">       
            <div class="card">
                <div class="card-header">Add Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product.store')}}">
                        @csrf   
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>
                            <div class="col-md-6">
                                <input id="photo" type="text" class="form-control" name="photo" value="{{ old('photo') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                            <div class="col-md-6">
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">--Select a Category--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id_category}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>               
                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>
                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ auth::user()->id}}" readonly>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>
                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control" name="user_name" value="{{ auth::user()->name}}" readonly>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="provider_id" class="col-md-4 col-form-label text-md-right">{{ __('Provider') }}</label>
                            <div class="col-md-6">
                                <select name="provider_id" id="provider_id" class="form-control">
                                    <option value="">--Select a Provider--</option>
                                    @foreach ($providers as $provider)
                                        <option value="{{$provider->id_provider}}" {{$provider->id_provider==2 ? 'selected' :
                                        ''}}>{{$provider->name}} {{$provider->surname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Product') }}
                                </button>
                                <a href="{{route('product.index')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

