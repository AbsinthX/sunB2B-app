@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
    <div class="col-6"> <h1>Lista użytkowników </h1> </div>
    
    <div class="col-6">
        <a class="float-right" href="{{ route('users.create') }}">
            <button type="button" class="btn btn-primary">Dodaj użytkownika</button>
        </a>
    </div>
    
    
    
    
<table class="table table-hover">
  <thead>
    <tr>
      <th style="width: 5%" scope="col">#</th>
      <th style="width: 15%" scope="col">Nazwa</th>
      <th style="width: 10%" scope="col">NIP</th>
      <th style="width: 15%" scope="col">Email</th>
      <th style="width: 15%" scope="col">Telefon</th>
      <th style="width: 20%" scope="col">Adres</th>
      <th style="width: 20%" scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$user -> id}}</th>
      <td class="align-middle">{{$user -> name}}</td>
      <td class="align-middle">{{$user -> nip}}</td> 
      <td class="align-middle">{{$user-> email }}</td> 
      <td class="align-middle">{{$user -> phone}}</td> 
      <td class="align-middle" style="word-wrap: break-word;min-width: 160px;max-width: 160px;">
         {{$user -> street}}<br>
         {{ $user -> postal_code }}
         {{ $user -> city }}<br>
         {{ $user -> state }}<br>
         {{ $user -> country->name ?? ""}}
      </td> 
      <td class="align-middle">
          <a href="{{route('users.show', $user -> id ) }}">
              <button class="btn btn-success btn-sm">P</button>
          </a>
          
          
          <a href="{{route('users.edit', $user -> id ) }}">
              <button class="btn btn-primary btn-sm">E</button>
          </a>
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