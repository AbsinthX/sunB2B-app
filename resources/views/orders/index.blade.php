@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
    <div class="col-6"> <h1>Lista zamówień </h1> </div>
         
    
    
    
<table class="table table-hover">
  <thead>
    <tr>
      <th style="width: 5%" scope="col">#</th>
      <th style="width: 15%" scope="col">Kontrahent</th>
      <th style="width: 10%" scope="col">Status</th>
      <th style="width: 15%" scope="col">Wartość brutto</th>
      <th style="width: 20%" scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
      @foreach($orders as $order)
    <tr>
      <th scope="row">{{$order -> id}}</th>
      <td class="align-middle">{{$order -> owner}}</td>
      <td class="align-middle">{{$order -> status}}</td>
      <td class="align-middle">{{$order -> value * 1.23}}</td>
      <td class="align-middle">
          <a href="{{route('orders.show', $order -> id ) }}">
              <button class="btn btn-success btn-sm">P</button>
          </a>
          
          
          <a href="{{route('orders.edit', $order -> id ) }}">
              <button class="btn btn-primary btn-sm">E</button>
          </a>
          <button class="btn btn-danger btn-sm delete" data-id="{{$order -> id}}"> 
              X
          </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    <div class="d-flex justify-content-center">{{ $orders->links() }}</div>
    
</div>
@endsection

@section('javascript')

$(function() {
 $('.delete').click(function() {
    $.ajax({
        method: "DELETE",
        url: "http://sunb2b.test/orders/"+ $(this).data("id")
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