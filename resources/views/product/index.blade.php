@extends('layouts.app')
@section('content') 
<div class="container">
  <a href="{{route('product.create')}}" class="btn btn-success">Add New Product</a><br><br>
  <table class="table table-light table-hover">
    <thead class="thead-light table-hover">
      <tr>
        <th>#</th>
        <th>ID Product</th>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Photo</th>
        <th>Category ID</th>
        <th>User ID</th>
        <th>Provider ID</th>
        <th>Actions</th>
      </tr>    
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$product->id_product}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->photo}}</td>
        <td>{{$product->category_id}}</td>
        <td>{{$product->user_id}}</td>
        <td>{{$product->provider_id}}</td>
        <td>
          <a href="{{route ('product.edit',$product->id_product)}}" class="btn btn-warning">EDIT
            {{@method_field('PUT')}}
          </a>
          <form action="{{route ('product.destroy',$product->id_product)}}" method="post" style="display:inline">
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