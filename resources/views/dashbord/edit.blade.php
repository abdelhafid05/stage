@extends('layouts.add')
@section('add')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2>Edit Article</h2>
        <form action="{{ route('dashbord.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control" value="{{ $product->photo }}" >
                @error('photo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" name="designation" id="designation" class="form-control" value="{{ $product->designation }}" >
                @error('designation')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="prix">Price:</label>
                <input type="number" name="prix" id="prix" class="form-control" value="{{ $product->prix }}" >
                @error('prix')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $product->description }}" class="form-control" >
                @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Update Article</button><a class="btn btn-secondary" href="{{route('dashbord.home')}}">back</a>
        </form>
    </div>
</div>
@endsection
