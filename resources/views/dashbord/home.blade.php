@extends('dashbord.index')
@section('start')
<div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>Welcome {{ Auth::user()->name }} To Our Dashboard</h1>
      </div>
    </div>
  </div>
  <a href="{{route('dashbord.create')}}" class="btn btn-primary">Add Product</a><br>
<table class="table">
    <thead>
      <tr class="table-active">
        <th scope="col">Photo</th>
        <th scope="col">Designation</th>
        <th scope="col">Prix</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    @foreach ($products as $product) 
            <tr>
                <td> 
                  @if($product->photo == null)
                  <img src="{{ asset("images\Empty state concept.jpeg") }}" class="card-img-top" alt="product Photo" style="width: 100px; height: 100px;">
                @else
                <img src="{{ asset($product->photo) }}" class="card-img-top" alt="product Photo" style="width: 100px; height: 100px;">
                @endif
              </td>
                <td>{{$product->designation}}</td>
                <td>{{$product->prix}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <form action="{{ route('dashbord.destroy',$product->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('dashbord.edit', $product->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                    </form>
                    </td>
            </tr>
    @endforeach 
  </table>
  
@endsection