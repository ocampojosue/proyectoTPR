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
                    <div class="card-header">{{ __('Add New Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('category.store') }}">
                            {{@csrf_field()}}
                            <div class="form-group row">
                                <label for="category_name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
                                <div class="col-md-6">
                                    <input id="category_name" type="category_name" class="form-control" name="category_name" value="{{ old('category_name') }}" >    
                                </div>
                            </div>

                            <div class="form-group row mb-0" >
                                <div class="col-md-8 offset-md-4">
                                    <input type="submit" value="Ad Category" class="btn btn-primary">
                                    <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
