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
                <div class="card-header">{{ __('Edit Provider') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('provider.update',$provider->id_provider) }}">
                        {{@csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $provider->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ $provider->surname}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $provider->phone }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ $provider->city }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direction" class="col-md-4 col-form-label text-md-right">{{ __('Direction') }}</label>

                            <div class="col-md-6">
                                <input id="direction" type="text" class="form-control" name="direction" value="{{ $provider->direction }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ci" class="col-md-4 col-form-label text-md-right">{{ __('C.I.') }}</label>

                            <div class="col-md-6">
                                <input id="ci" type="text" class="form-control" name="ci" value="{{ $provider->ci }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control" name="company_name" value="{{ $provider->company_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User') }}</label>
                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control"  name="user_id" value="{{ auth::user()->id}}" re readonly>                     
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>
                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control"  name="user_name" value="{{ auth::user()->name}}" readonly>                                
                            </div>
                        </div>
                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Save Changes" class="btn btn-primary">
                                <a href="{{route('provider.index')}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection