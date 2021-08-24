@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Email</th>
      <th scope="col">Państwo</th>
      <th scope="col">Opis</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user -> id}}</th>
      <td>{{$user -> name}}</td>
      <td>{{$user -> email}}</td> 
      <td>{{$user->country->name }}</td> 
      <td>{{$user -> biography}}</td> 
    </tr>
    @endforeach
  </tbody>
</table>
    <div class="d-flex justify-content-center">{{ $users->links() }}</div>
    
</div>
@endsection
