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
      src="https://images.pexels.com/photos/257904/pexels-photo-257904.jpeg"
      alt=""
      class="w-full h-full rounded-l-lg"
    />
    <div class="p-8">
      <h1 class="font-bold text-2xl">Propuesta</h1>
      <p class="my-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo sequi
        minus esse molestias non quam consequatur fugiat in animi, corrupti
        quia est adipisci magni repellendus, eos asperiores, necessitatibus
        facilis. Reiciendis. Lorem, ipsum dolor sit amet consectetur
        adipisicing elit. Nemo ipsa iusto velit doloremque voluptate earum
        delectus maxime suscipit, officia, voluptatum quam sequi. Porro, sed
        minima? Quos illo asperiores beatae hic.
      </p>
      <p class="my-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo sequi
        minus esse molestias non quam consequatur fugiat in animi, corrupti
        quia est adipisci magni repellendus, eos asperiores, necessitatibus
        facilis.
      </p>
      <p class="my-4">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio
        obcaecati quasi nulla placeat provident delectus dolor nemo fugit
        ullam. Beatae est, vitae fuga sequi reprehenderit nemo enim dolorem
        nam quod.
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
