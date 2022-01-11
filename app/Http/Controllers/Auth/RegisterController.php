<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|min:3|max:255|unique:users',
            'password' => 'required|string|min:8|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'nameUser'=> 'required|string|min:3|max:255',
            // 'age' => 'required|integer|min:18|max:120',            
            'cellphone'=> 'required|string|min:6|max:20',
            'phone'=> 'required|string|min:6|max:20',
            'gender' => 'required|in:Hombre,Mujer',
            'address'=> 'required|string|min:6|max:200',
            'bithday'=> 'required|date|before:2006-01-01'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'use_name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'use_lastname'=> $data['lastname'],
            'use_nick'=> $data['nameUser'],
            'use_cellphone'=> $data['cellphone'],
            'use_phone'=> $data['phone'],
            'use_gender'=>$data['gender'],
            'use_address'=>$data['address'],
            'use_birthday'=> $data['bithday']
        ]);
    }
}
