@extends('layouts.app')
@section('contenido_cSS')
<title>Propuesta</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }} " />
<link rel="stylesheet" href="{{ asset('css/propuestas.css') }} " />
<style>
    body {
        background: url(https://images.pexels.com/photos/4947386/pexels-photo-4947386.jpeg);

    }
</style>
@endsection


@section('content')
<div class="relative">
  <div class="absolute overlay z-1"></div>
  <div class="absolute modal2 z-10 bg-white rounded-lg grid grid-cols-2">
    <img
      src="{{ $profer->pro_image }}"
      alt=""
      width="600"
      class="h-full rounded-l-lg"
    />
    <div class="p-8">
      <h1 class="font-bold text-2xl">{{ $profer->pro_title }}</h1>
      <p class="my-4">
        {{ $profer->pro_description }}      
      </p>
      <div class="mt-10">
        <button
          class="bg-[#816AFE] px-2 py-10 rounded-lg w-full text-center font-bold text-white"
        >
          Aceptar propuesta
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
