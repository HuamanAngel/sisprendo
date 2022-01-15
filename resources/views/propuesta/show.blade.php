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
            <img src="{{ $profer->pro_image }}" alt="" width="600" class="h-full rounded-l-lg" />
            <div class="p-8">
                <h1 class="font-bold text-2xl">{{ $profer->pro_title }}</h1>
                <p class="my-4">
                    {{ $profer->pro_description }}
                </p>
                <div class="mt-10">
                    @if (auth()->user() != null)
                        @if (auth()->user()->userPropuestas->where('id', $profer->id)->first() == null)

                            @if (App\Models\UserPropuesta::checkProfer($profer->id))
                                <button disabled
                                    class="bg-[#816AFE] px-2 py-10 rounded-lg w-full text-center font-bold text-white">
                                    Esperando respuesta
                                </button>
                            @else
                                <button onclick="window.location.href='{{ route('propuesta.accepted', $profer->id) }}'"
                                    class="bg-[#816AFE] px-2 py-10 rounded-lg w-full text-center font-bold text-white">
                                    Aceptar propuesta
                                </button>
                            @endif
                        @else
                            <button disabled
                                class="bg-[#816AFE] px-2 py-10 rounded-lg w-full text-center font-bold text-white">
                                Tu eres el de la propuesta
                            </button>

                        @endif



                    @else
                        <button onclick="window.location.href='{{ route('propuesta.accepted', $profer->id) }}'"
                            class="bg-[#816AFE] px-2 py-10 rounded-lg w-full text-center font-bold text-white">
                            Aceptar propuesta
                        </button>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
