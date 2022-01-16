@extends('layouts.app')


@section('contenido_js')

@endsection

@section('contenido_cSS')

@endsection


@section('content')
    <div class="container row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"> Datos de la operacion</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div style="background-color:rgb(69,198,255);color:white;width:75%" class="p-4">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="" style="text-align: left">Importe : </h4>
                                </div>

                                <div class="col-4">
                                    <h2 class="" style="text-align: right">$10.00</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <p> <strong>Codigo de transaccion : </strong> P2131-XSDA2-123 </p>
                    <p> <strong>Beneficiario : </strong> AOE Inc </p>
                    <p> <strong>Fecha : </strong> {{ now() }} </p>
                    <p> <strong>Descripcion : </strong> Pago por tarjeta premium </p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                </div>
                <form action="{{ route('payment.process') }}" method="POST">
                    @csrf
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col-sm-12 p-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Tarjeta de credito/debito
                                    </label>
                                  </div>                                
                            </div>
                            <div class="col-sm-12 p-4">
                                <input type="text" class="form-control" required placeholder="Numero de tarjeta">
                            </div>
                            <div class="col-sm-12 p-4">
                                <input type="text" class="form-control" required placeholder="Nombre del titular">
                            </div>
                            <div class="col-sm-6 p-4">
                                <input type="text" class="form-control" required placeholder="Fecha de vencimiento">
                            </div>
                            <div class="col-sm-6 p-4">
                                <input type="text" class="form-control" required placeholder="CVV">
                            </div>

                        </div>
                    </div>
                    <input type="hidden" name="pro_title" value="{{ $request->pro_title }}">
                    <input type="hidden" name="pro_description" value="{{ $request->pro_description }}">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary p-2 m-4" onclick="window.location.href='{{ route('investor.index') }}' ">Cancelar</button>
                        <input type="submit" name="premium" class="btn btn-primary p-2 m-4" value="Pagar">
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection

@section('contenido_abajo_js')

@endsection
