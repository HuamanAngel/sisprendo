@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
<style>
    body{
        background: #0091D1;
        background: linear-gradient(to right, #74B9D7, #0091D1);
    }
    
    .bg{
        background-image: url("{{ asset('img/BG.png') }}");
        background-position: center center;
    }
</style>    
@endsection


@section('content')
<div class="container w-75 bg-primary mt-5 rounded shadow">
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
    </div>                            
@endif

    <div class="row align-items-stretch">
        <div class="col bg-white p-5 rounded-end">
            {{-- <div class="text-end">
                <img src="img/Logo.png" width="200" alt="">
            </div> --}}

            <h2 class="fw-bold text-center py-1">Registro</h2>

            <!-- Registro -->
            
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre-txt" class="form-label">Nombres</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="nombre-txt">
                </div>
                <div class="mb-3">
                    <label for="apellido-txt" class="form-label">Apellidos</label>
                    <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" id="apellido-txt">
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="nombre de usuario-txt" class="form-label">Nombre de usuario</label>
                            <input type="text" name="nameUser" value="{{ old('nameUser') }}" class="form-control" id="nombre de usuario-txt">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>

                {{-- <div class="mb-3">
                    <label for="tipo-select" class="form-label">Tipo de usuario</label>
                    <select class="form-select" id="tipo-select">
                        <option value="1">Empresario</option>
                        <option value="2">Inversionista</option>
                    </select>
                </div> --}}
                
                <div class="row">
                    {{-- <div class="col">
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" name="age" class="form-control" id="edad">
                            </div>
                    </div> --}}
                    <div class="col">
                        <div class="mb-6">
                            <label for="celular" class="form-label">Celular</label>
                            <input type="text" name="cellphone" value="{{ old('cellphone') }}" class="form-control" id="celular">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-6">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="telefono">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    Sexo<br>
                    <div class="form-check">            
                        <input class="form-check-input" value="Hombre" type="radio" name="gender" id="hombre">
                        <label class="form-check-label" for="hombre">
                          Hombre
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" value="Mujer" type="radio" name="gender" id="mujer">
                        <label class="form-check-label" for="mujer">
                          Mujer
                        </label>
                    </div>  
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" value="{{ old('address') }}" name="address" class="form-control" id="direccion">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="bithday" value="{{ old('bithday') }}" class="form-control" id="fechaNacimiento"
                            placeholder="dd/mm/aaaa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrarte</button>
                        </div>
                    </div>
                    <div class="col-3"> </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('contenido_abajo_js')
    
@endsection
