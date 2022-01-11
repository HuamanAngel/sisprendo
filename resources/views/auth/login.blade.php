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
        background-image:  url("{{ asset('img/BG.png') }}");
        background-position: center center;
    }
</style>

@endsection


@section('content')
<div class="container w-75 bg-primary mt-5 rounded shadow">
    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">

        </div>
        <div class="col bg-white p-5 rounded-end">
            <div class="text-end">
                <img src="{{ asset('img/Logo.png') }}" width="122" alt="">
            </div>

            <h2 class="fw-bold text-center py-5">Bienvenido</h2>

            <!-- Login -->

            <form action="#">
                <div class="mb-4">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <!--<div class="mb-4 form-check">
                    <input type="checkbox" name="connected" class="form-check-input" id="">
                    <label for="connected" class="form-check-label">Mantenerme conectado</label>
                </div>-->

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>

                <div class="my-3">
                    <span>No tienes cuenta? <a href="registro.html">Regístrate</a></span> <br>
                    <!--<span><a href="#">Recuperar contraseña</a></span>-->
                </div>

                <!-- LOGIN CON REDES SOCIALES-->
                <!--<div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Iniciar Sesión</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/fb.png" width="32" alt="">
                                    </div>

                                    <div class="col-12 col-md-10 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/google.png" width="32" alt="">
                                    </div>

                                    <div class="col-12 col-md-10 text-center">
                                        Google
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>-->
            </form>
        </div>
    </div>
</div>


@endsection

@section('contenido_abajo_js')
    
@endsection