@extends('templates.main')

@section('content')
<div class="row">
<div class="col-12">
<a class="navbar-brand" href="{{ route('admin.users.create') }}" role="button">ADD</a>

</div>
</div>
<h1>USERS</h1>
<div class="card">
<table>
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Actions </th>
  </tr>  
    </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
          <th scope="row">{{ $user->id }}</th>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email  }}</td>
          <td>
          <a class="navbar-brand" href="{{ route('admin.users.edit' ,$user->id ) }}" role="button">Edit</a>
          <button type="button" class="bt"
          onclick="event.preventDefault();
          document.getElementById('delete{{$user->id }}').submit()">
              DELETE
          </button>
    <form id="delete{{$user->id }}" action="{{ route('admin.users.destroy',$user->id)}}" method="POST">
@csrf
@method('DELETE')
</form> 
</td>

      </tr>

      @endforeach
  </tbody>
</table> 
</div>
@endsection