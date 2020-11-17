@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(session('message'))
            <div class="alert alert success">
                <h3></h3>
            </div>
        @endif
        <div class="col-md-8">       
            <div class="card">
                <div class="card-header">Add Category</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('category.store')}}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="category_name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>

                            <div class="col-md-6">
                                <input id="category_name" type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ old('category_name') }}" required autocomplete="category_name" autofocus>

                                @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Category') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection