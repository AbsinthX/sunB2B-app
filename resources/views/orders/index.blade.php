@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card w-100 mt-3">
                    <div class="card-header"><i class="fas fa-list"></i> Zamówienia:</div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 5%" scope="col">ID</th>
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
                                <td class="align-middle">{{$order -> user -> name}}</td>
                                <td class="align-middle">{{$order -> status}}</td>
                                <td class="align-middle">{{$order -> value * 1.23}}</td>
                                <td class="align-middle">
                                    <a href="{{route('orders.show', $order -> id ) }}">
                                        <button class="btn btn-success btn-sm"><i class="fas fa-search"></i></button>
                                    </a>


                                    <a href="{{route('orders.edit', $order -> id ) }}">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                    </a>
                                    <button class="btn btn-danger btn-sm delete" data-id="{{$order -> id}}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{{ $orders->links() }}</div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')

$(function() {
 $('.delete').click(function() {
        Swal.fire({
        title: 'Czy na pewno chcesz usunąć to zamówienie?',
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
        url: "http://sunb2b.test/orders/"+ $(this).data("id")
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
        'Zamówienie usunięte.',
        '',
        'success')}
        })






//     $.ajax({
//         method: "DELETE",
//         url: "http://sunb2b.test/orders/"+ $(this).data("id")
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
