@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-6"> <h1>Lista produktów </h1> </div>
    
    <div class="col-6">
        <a class="float-right" href="{{ route('products.create') }}">
            <button type="button" class="btn btn-primary">Dodaj produkt</button>
        </a>
    </div>
    
</div>
<div class="row">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Opis</th>
      <th scope="col">Ilość</th>
      <th scope="col">Cena</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
      @foreach($products as $product)
    <tr>
      <th scope="row">{{$product -> id}}</th>
      <td>{{$product -> name}}</td>
      <td>{{$product -> description}}</td>
      <td>{{$product -> amount}}</td>
      <td>{{$product -> price}}</td>
      <td>
          <button class="btn btn-danger btn-sm delete" data-id="{{$product -> id}}"> 
              X
          </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
    <div class="d-flex justify-content-center">{{ $products->links() }}</div>
</div>
</div>
@endsection

@section('javascript')
$(function() {
 $('.delete').click(function() {
    $.ajax({
        method: "DELETE",
        url: "http://sunb2b.test/products/"+ $(this).data("id")
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