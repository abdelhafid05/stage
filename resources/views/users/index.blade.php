@extends('dashbord\index')
@section('content')
<div class="container">
    <div class="row">
      <div class="col text-center">
        <h1>Here is The Admins</h1>
      </div>
    </div>
  </div>
    <div class="table-container">
        <a href="{{route('users.create')}}" class="btn btn-primary">Add Admin</a><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this account?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
