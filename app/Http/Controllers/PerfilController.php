<?php

namespace App\Http\Controllers;

use App\Models\UserPropuesta;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function indexInvestor(){

        return view('auth.inversionistas');
    }

    public function deleteInvestor($id){
        $investor = UserPropuesta::find($id);
        $investor->delete();
        return redirect()->route('investor.index');
    }
}
