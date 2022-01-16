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
    public function index(Request $request)
    {
        if($request->wordSearch != null || $request->wordSearch != ''){
            $profers = Propuesta::where('pro_title', 'like', '%'.$request->wordSearch.'%')->orderBy('pro_premium', 'desc')->get();
        }else{
            $profers = Propuesta::orderBy('pro_premium', 'desc')->get();
        }

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
        if($request->has('comprar')){
            return view('auth.payment',compact('request'));
        }else if($request->has('gratis')){
            auth()->user()->userPropuestas()->create([
                'pro_title'=>$request->pro_title,
                'pro_description'=>$request->pro_description,
                'pro_image'=>"https://img.interempresas.net/fotos/2517054.jpeg"
            ]);
            return redirect()->route('investor.index');
        }else if($request->has('premium')){
            auth()->user()->userPropuestas()->create([
                'pro_title'=>$request->pro_title,
                'pro_description'=>$request->pro_description,
                'pro_image'=>"https://img.interempresas.net/fotos/2517054.jpeg",
                'pro_premium'=>true
            ]);
            return redirect()->route('investor.index');
        }
    }
    
    public function payment(){
        return view('auth.payment');
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
