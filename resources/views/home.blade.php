@extends('layouts.app')

@section('contenido_cSS')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
@endsection

@section('content')
<div class="relative">
    <!-- {/* Contenedor izquierda */} -->
    <div class="absolute w-full lg:w-1/2 z-20">
      <div class="py-10 ml-8">
        <div style="height: 20vh"></div>
        <!-- {/* Texto */} -->
        <h1 class="text-4xl lg:text-8xl text-center">
          <span class="headline"> LOS INVERSIONISTAS TE ESPERAN </span>
        </h1>
        <!-- {/* SubTexto */} -->
        <p class="text-2xl mt-10">
          Coloca tu propuesta de emprendimiento para tener inversionistas
        </p>
        <!-- {/* Boton */} -->
        <div class="mt-10 w-1/6">
          <button
            class="bg-[#816AFE] p-2 rounded-lg w-full text-center font-bold text-white"
          >
            EMPRENDER
          </button>
        </div>
      </div>
    </div>

    <!-- {/* Illustration */} -->
    <div class="absolute top-20 z-10">
      <div class="flex flex-row-reverse">
        <img class="w-full lg:w-3/5" src="{{ asset('img/illustration.png') }}" alt="" />
      </div>
    </div>

    <!-- Blob  -->
    <div class="absolute top-24 right-44 z-0">
      <img src="{{ asset('img/blob.svg') }}" alt="" />
    </div>
  </div>
@endsection
