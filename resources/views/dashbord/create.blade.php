@extends('layouts.add')
@section('add')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <form action="{{ route('dashbord.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo" class="form-control" value="{{old('photo')}}" >
                @error('photo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            
            
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" name="designation" id="designation" class="form-control" value="{{old('designation')}}" >
                @error('designation')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="prix">Price:</label>
                <input type="number" name="prix" id="prix" class="form-control" value="{{old('prix')}}" >
                @error('prix')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{old('description')}}" class="form-control" >
                @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Create Article</button><a class="btn btn-secondary" href="{{route('articles.index')}}">back</a>
        </form>
    </div>
</div>
@endsection