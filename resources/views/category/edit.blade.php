@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Edit Category') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('category.update',$category->id_category) }}">
                    {{@csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group row">
                        <label for="category_name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>
                        <div class="col-md-6">
                            <input id="category_name" type="category_name" class="form-control" name="category_name" value="{{ $category->category_name}}">    
                        </div>
                    </div>

                    <div class="form-group row mb-0" >
                        <div class="col-md-8 offset-md-4">
                            <input type="submit" value="Save Changes" class="btn btn-primary">
                            <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <form method="POST" action="{{ route('category.update',$category->id_category) }}">
    {{@csrf_field()}}
    {{method_field('PATCH')}}
    <label for="category_name">Category Name</label>
    <input type="text" name="category_name" id="category_name" class="form-control" value="{{ $category->category_name}}">
    <input type="submit" value="Save Changes">
</form> --}}
@endsection
