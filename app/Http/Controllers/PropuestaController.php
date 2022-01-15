<?php

namespace App\Http\Controllers;

use App\Models\Propuesta;
use Illuminate\Http\Request;

class PropuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profers = Propuesta::all();
        return view('propuesta.index',compact('profers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profer = Propuesta::where('id',$id)->first();
        return view('propuesta.show',compact('profer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function acceptedProffer($id){
        $profer = Propuesta::where('id',$id)->first();
        $profer->propuestaUserPropuesta()->create([
            'use_id' => auth()->user()->id,
            'pro_id' => $id,
        ]);
        return redirect()->route('propuesta.index')->with('msgSucces', 'Propuesta aceptada, se envio un mensaje al emprendedor');
    }
}
