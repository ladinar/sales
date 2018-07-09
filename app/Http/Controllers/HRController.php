<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HRCrud;
use App\User;
use Validator;
use Response;
use Illuminate\Support\Facades\input;
use App\http\Requests;
use DB;
use Illuminate\Support\Facades\Hash;

class HRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $hr = HRCrud::all();
        // return view('HR/human_resource')->with('hr', $hr);

        $hr = DB::table('users')
                ->join('tb_company', 'tb_company.id_company', '=', 'users.id_company')
                ->select('users.nik', 'users.name', 'users.id_position', 'users.id_division', 'users.id_territory', 'tb_company.code_company')
                ->get();
        return view('HR/human_resource')->with('hr', $hr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'company' => 'required',
            'date_of_entry' => 'required',
            'date_of_birth' => 'required',
        ]); 

        // return User::create([
        //     'nik' => $request['nik'],
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        //     'id_company' => $request['company'],
        //     'id_division' => $request['division'],
        //     'id_position' => $request['position'],
        //     'id_territory' => $request['territory'],
        //     'date_of_entry' => $request['date_of_entry'],
        //     'date_of_birth' => $request['date_of_birth'],
        //     'address' => $request['address'],
        //     'phone' => $request['phone_number'],
        // ]);

        $tambah = new User();
        $tambah->nik = $request['nik'];
        $tambah->name = $request['name'];
        $tambah->password = Hash::make($request['password']);
        $tambah->email = $request['email'];
        $tambah->id_company = $request['company'];
        $tambah->id_division = $request['division'];
        $tambah->id_position = $request['position'];
        $tambah->id_territory = $request['territory'];
        $tambah->date_of_entry = $request['date_of_entry'];
        $tambah->date_of_birth = $request['date_of_birth'];
        $tambah->address = $request['address'];
        $tambah->phone = $request['phone_number'];
        $tambah->save();
        
        return redirect('hu_rec');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
