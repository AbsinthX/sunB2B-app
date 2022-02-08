@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-6"> <h1><i class="fas fa-list"></i> Lista produktów </h1> </div>

    <div class="col-6">
        <a class="float-right" href="{{ route('products.create') }}">
            <button type="button" class="btn btn-primary"> <i class="fas fa-plus"></i> Dodaj produkt</button>
        </a>
    </div>

</div>

<div class="row">
<table class="table table-hover">
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
          @if(Gate::check('isAdmin') || Gate::check('isUser'))
          <a href="{{route('products.show', $product -> id ) }}">
              <button class="btn btn-success btn-sm"><i class="fas fa-search"></i></button>
          </a>
          @endif

          <a href="{{route('products.edit', $product -> id ) }}">
              <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
          </a>

          <button class="btn btn-danger btn-sm delete" data-id="{{$product -> id}}">
              <i class="fas fa-trash-alt"></i>
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
Swal.fire({
title: 'Czy na pewno chcesz usunąć produkt?',
text: "Nie będziesz mógł cofnąć tej akcji!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Tak, usuń.',
cancelButtonText: 'Anuluj'
}).then((result) => {
if (result.isConfirmed) {
$.ajax({
method: "DELETE",
url: "http://sunb2b.test/products/"+ $(this).data("id")
<!--        data: { id: $(this).data("id") }-->
})
.done(function( response ) {
window.location.reload();
})
.fail(function( response ){
Swal.fire({
icon: 'error',
title: 'Ups...',
text: 'Coś poszło nie tak!'
})
});
Swal.fire(
'Produkt usunięty.',
'',
'success')}
})






//     $.ajax({
//         method: "DELETE",
//         url: "http://sunb2b.test/products/"+ $(this).data("id")
// <!--        data: { id: $(this).data("id") }-->
// })
//   .done(function( response ) {
//   window.location.reload();
//
//   })
//   .fail(function( response ){
//   alert("ERROR");
//   });
});
});

@endsection
