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
                <div class="card-header">Add New Provider</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('provider.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
                            <?php $fcha = date("Y-m-d");?>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="<?php echo $fcha;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client ID') }}</label>
                            <div class="col-md-6">
                                <input id="client_id" type="text" class="form-control" name="client_id" value="{{ old('client_id') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="client_name" class="col-md-4 col-form-label text-md-right">{{ __('Client Name') }}</label>
                            <div class="col-md-6">
                                <input id="client_name" type="text" class="form-control" name="client_name" value="{{ old('client_name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_id" class="col-md-4 col-form-label text-md-right">{{ __('Product ID') }}</label>
                            <div class="col-md-6">
                                <input id="product_id" type="text" class="form-control" name="product_id" value="{{ old('product_id') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>
                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="ci" value="{{ old('product_name') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>
                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control"  name="user_id" value="{{ auth::user()->id}}"readonly>                     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>
                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control"  name="user_name" value="{{ auth::user()->name}}" readonly>                                
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Sale') }}
                                </button>
                                <a href="{{route('sale.index')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection