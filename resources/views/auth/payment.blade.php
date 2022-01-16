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
                <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                    type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Perfil</button>
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
                </div>
                <div class="tab-pane fade show active" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
                                @foreach(auth()->user()->userPropuestas as $propuesta)
                                    @foreach($propuesta->propuestaUserPropuesta as $userPropuesta)
                                        @php
                                            $iteracionNow++;
                                        @endphp
                                    <tr>
                                        <th scope="row">{{ $iteracionNow }}</th>
                                        <td><a href="{{ route('propuesta.show',$propuesta->id) }}">{{ 'Pro-'.$iteracionNow }}</a></td>
                                        <td>{{ $userPropuesta->userPropuestaUser->use_name.' '.$userPropuesta->userPropuestaUser->use_lastname }}</td>
                                        <td>{{ $userPropuesta->userPropuestaUser->use_phone }}</td>
                                        <td>{{ $userPropuesta->userPropuestaUser->use_cellphone }}</td>
                                        <td>{{ $userPropuesta->created_at }} </td>
                                        <td>{{ $userPropuesta->userPropuestaUser->email }}</td>
                                        <td>
                                            <form action="{{ route('investor.delete',$userPropuesta->id) }}" method="POST">
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
@endsection

@section('contenido_abajo_js')

@endsection
