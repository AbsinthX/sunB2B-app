@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Opis</th>
      <th scope="col">Ilość</th>
      <th scope="col">Cena</th>
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
    </tr>
    @endforeach
  </tbody>
</table>
    
    <div class="d-flex justify-content-center">{{ $products->links() }}</div>
</div>
@endsection
