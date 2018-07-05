<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HRCrud;
use Validator;
use Response;
use Illuminate\Support\Facades\input;
use App\http\Requests;
use DB;

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
        //
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
