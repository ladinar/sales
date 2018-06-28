<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\HRCrud;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';
    protected $email = 'email';

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
            'employees_name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'company' => 'required|string|max:191',
            'division' => 'required|string|max:191',
            'position' => 'required|string|max:191',
            'date_of_entry' => 'required|string|max:191',
            'date_of_birth' => 'required|string|max:191',
            'address' => 'required|string|max:510',
            'phone_number' => 'required|string|max:191',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $kode_perusahaan = 'id_company';
        $tgl_masuk = 'date_of_entry';
        $sub_tahun_masuk = substr($tgl_masuk, 3, 2);
        $sub_bln_masuk = substr($tgl_masuk, 6, 2);
        $tgl_lahir = 'date_of_birth';
        $sub_tahun_lahir = substr($tgl_lahir, 3, 2);
        $sub_bln_lahir = substr($tgl_lahir, 6, 2);

        return User::create([
            'employees_name' => $data['employees_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'company' => $data['company'],
            'division' => $data['division'],
            'position' => $data['position'],
            'date_of_entry' => $data['date_of_entry'],
            'date_of_birth' => $data['date_of_birth'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
        ]);
    }
}
