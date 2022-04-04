@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12">
                <div class="card mt-3">

                    <div class="card-header d-flex align-items-center">
                        <span><i class="fas fa-list"></i> Lista użytkowników</span>
                        <a class="ml-auto btn-primary btn" href="{{ route('users.create') }}" role="button"><i
                                class="fas fa-plus"></i> Dodaj użytkownika</a>
                    </div>

                    <div class="container">

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
                                    <td class="align-middle"
                                        style="word-wrap: break-word;min-width: 160px;max-width: 160px;">
                                        {{$user -> street}}<br>
                                        {{ $user -> postal_code }}
                                        {{ $user -> city }}<br>
                                        {{ $user -> state }}<br>
                                        {{ $user -> country->name ?? ""}}
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('users.show', $user -> id ) }}">
                                            <button class="btn btn-success btn-sm"><i class="fas fa-search"></i>
                                            </button>
                                        </a>


                                        <a href="{{route('users.edit', $user -> id ) }}">
                                            <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <button class="btn btn-danger btn-sm delete" data-id="{{$user -> id}}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">{{ $users->links() }}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    const deleteUrl = "{{ url('users') }}/";


$(function() {
 $('.delete').click(function() {
        Swal.fire({
        title: 'Czy na pewno chcesz usunąć użytkownika?',
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
        url: deleteUrl + $(this).data("id")
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
        'Użytkownik usunięty.',
        '',
        'success'
        )
        }
        })
});
});

@endsection
