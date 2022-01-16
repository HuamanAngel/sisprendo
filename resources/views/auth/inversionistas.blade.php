@extends('layouts.app')


@section('contenido_js')

@endsection

@section('contenido_cSS')

@endsection


@section('content')
    <div class="container">

        <div class="d-flex align-items-start row">
            <div class="bg-primary nav flex-column nav-pills col-md-2 col-sm-12" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                {{-- <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                    type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Perfil</button> --}}
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                    aria-selected="false">Mis propuestas</button>
                <button class="nav-link active" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">Inversionistas</button>
            </div>
            <div class="tab-content col-md-10 col-sm-10" id="v-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <style>
                        .myprofer>img {
                            width: 100% !important;
                            height: 400px !important;
                        }

                    </style>
                    <div class="row myprofer">
                        <div class="col-sm-3">
                            <div class="card">
                                <img class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    height="200px" src="{{ asset('img/icon_add.png') }}" alt="">
                            </div>
                        </div>
                        @if (auth()->user()->userPropuestas != null)
                            @foreach (auth()->user()->userPropuestas as $profer)
                                <div class="col-sm-3">
                                    <div class="card">
                                        @include('propuesta.snippet.profer')
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h4>Aun no has propuestas disponibles</h4>
                        @endif
                    </div>

                </div>
                <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel"
                    aria-labelledby="v-pills-messages-tab">
                    <caption class="fw-bold text-center py-2">Interesados en tus propuestas</caption>
                    <div class="table-responsive">
                        <table class="table caption-top">


                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Propuesta</th>
                                    <th scope="col">Interesado</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Fecha de interes</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $iteracionNow = 0;
                                @endphp
                                @foreach (auth()->user()->userPropuestas as $propuesta)
                                    @foreach ($propuesta->propuestaUserPropuesta as $userPropuesta)
                                        @php
                                            $iteracionNow++;
                                        @endphp
                                        <tr>
                                            <th scope="row">{{ $iteracionNow }}</th>
                                            <td><a
                                                    href="{{ route('propuesta.show', $propuesta->id) }}">{{ 'Pro-' . $iteracionNow }}</a>
                                            </td>
                                            <td>{{ $userPropuesta->userPropuestaUser->use_name . ' ' . $userPropuesta->userPropuestaUser->use_lastname }}
                                            </td>
                                            <td>{{ $userPropuesta->userPropuestaUser->use_phone }}</td>
                                            <td>{{ $userPropuesta->userPropuestaUser->use_cellphone }}</td>
                                            <td>{{ $userPropuesta->created_at }} </td>
                                            <td>{{ $userPropuesta->userPropuestaUser->email }}</td>
                                            <td>
                                                <form action="{{ route('investor.delete', $userPropuesta->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-primary">Borrar</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('propuesta.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva Propuesta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Titulo</label>
                            <input type="text" required name="pro_title" placeholder="Titulo de la propuesta" class="form-control"
                                id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Propuesta</label>
                            <textarea class="form-control" required name="pro_description" placeholder="Añade tu propuesta"
                                id="message-text"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="comprar" value="Comprar" class="btn btn-warning">
                        <input type="submit" name="gratis" value="Subir gratis" class="btn btn-primary">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('contenido_abajo_js')

@endsection
