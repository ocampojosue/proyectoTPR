@extends('layouts.app')
@section('content')
<div class="container">
  <a href="{{route('provider.create')}}" class="btn btn-success">Add New Provider</a><br><br>
  <table class="table table-light table-hover">
    <thead class="thead-light table-hover">
      <tr>
        <th>#</th>
        <th>ID Category</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Phone</th>
        <th>City</th>
        <th>Direction</th>
        <th>C.I.</th>
        <th>Company Name</th>
        <th>User Name</th>
        <th>Actions</th>
      </tr>    
    </thead>
    <tbody>
    @foreach($providers as $provider)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$provider->id_provider}}</td>
        <td>{{$provider->name}}</td>
        <td>{{$provider->surname}}</td>
        <td>{{$provider->phone}}</td>
        <td>{{$provider->city}}</td>
        <td>{{$provider->direction}}</td>
        <td>{{$provider->ci}}</td>
        <td>{{$provider->company_name}}</td>
        <td>{{$provider->user_name}}</td>
        <td>
          <a href="{{route ('provider.edit',$provider->id_provider)}}" class="btn btn-warning">EDIT
            {{@method_field('PUT')}}
          </a>
          <form action="{{route ('provider.destroy',$provider->id_provider)}}" method="post" style="display:inline">
            {{@csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Confirm to Delete')">DELETE</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody> 
  </table>
</div>
@endsection


