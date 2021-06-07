@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user -> id}}</th>
      <td>{{$user -> name}}</td>
      <td>{{$user -> email}}</td>     
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
