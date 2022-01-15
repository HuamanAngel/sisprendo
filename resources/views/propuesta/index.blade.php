@extends('layouts.app')


@section('contenido_js')

@endsection

@section('contenido_cSS')

@endsection


@section('content')
    <div>
        <h1 class="font-bold text-4xl py-6 px-8">Propuestas</h1>
        <div class="mx-8 my-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-8">
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
                @include('propuesta.snippet.profer')
            </div>
        </div>

    </div>

@endsection

@section('contenido_abajo_js')

@endsection
