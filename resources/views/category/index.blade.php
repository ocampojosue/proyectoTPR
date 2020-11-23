@extends('layouts.app')
@section('content')
<div class="container">
  <a href="{{route('category.create')}}" class="btn btn-success">Add New Category</a><br><br>
  <table class="table table-light table-hover">
    <thead class="thead-light table-hover">
      <tr>
        <th>#</th>
        <th>ID Category</th>
        <th>Category Name</th>
        <th>Actions</th>
      </tr>    
    </thead>
    <tbody>
    @foreach($categories as $category)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$category->id_category}}</td>
        <td>{{$category->category_name}}</td>
        <td>
          <a href="{{route ('category.edit',$category->id_category)}}" class="btn btn-warning">EDIT
            {{@method_field('PUT')}}
          </a>
          <form action="{{route ('category.destroy',$category->id_category)}}" method="post" style="display:inline">
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