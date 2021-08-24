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
      <th scope="col">Akcje</th>
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
      <td>
          <button class="btn btn-danger btn-sm delete" data-id="{{$user -> id}}"> 
              X
          </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <div class="d-flex justify-content-center">{{ $users->links() }}</div>
    
</div>
@endsection

@section('javascript')

$(function() {
 $('.delete').click(function() {
    $.ajax({
        method: "DELETE",
        url: "http://sunb2b.test/users/"+ $(this).data("id")
<!--        data: { id: $(this).data("id") }-->
})
  .done(function( response ) {
  window.location.reload();
  
  })
  .fail(function( response ){
  alert("ERROR");
  });
});
});

@endsection