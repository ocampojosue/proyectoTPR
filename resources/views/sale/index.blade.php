@extends('layouts.app')
@section('content') 
<div class="container">
  <a href="{{route('sale.create')}}" class="btn btn-success">Add New Sale</a><br><br>
  <table class="table table-light table-hover">
    <thead class="thead-light table-hover">
      <tr>
        <th>#</th>
        <th>ID Sale</th>
        <th>Date</th>
        <th>Price</th>
        <th>Client ID</th>
        <th>Client Name</th>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>User ID</th>
        <th>User Name</th>
        <th>Actions</th>
      </tr>    
    </thead>
    <tbody>
    @foreach($sales as $sale)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$sale->id_sale}}</td>
        <td>{{$sale->date}}</td>
        <td>{{$sale->price}}</td>
        <td>{{$sale->client_id}}</td>
        <td>{{$sale->client_name}}</td>
        <td>{{$sale->product_id}}</td>
        <td>{{$sale->product_name}}</td>
        <td>{{$sale->user_id}}</td>
        <td>{{$sale->user_name}}</td>
        <td>
          <a href="{{route ('sale.edit',$sale->id_sale)}}" class="btn btn-warning">EDIT
            {{@method_field('PUT')}}
          </a>
          <form action="{{route ('sale.destroy',$sale->id_sale)}}" method="post" style="display:inline">
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