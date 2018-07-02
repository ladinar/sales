<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;
use DB;
use Illuminate\Support\Collection;

class SALESController extends Controller
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
        $lead = DB::table('sales_lead_register')
                ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                ->select('sales_lead_register.lead_id', 'sales_lead_register.contact', 'sales_lead_register.opp_name', 'sales_lead_register.closing_date', 'sales_lead_register.amount', 'users.name')
                ->get();
        return view('sales/sales')->with('lead', $lead);
    }

    public function detail_sales($lead_id)
    {
        $tampilkan = Sales::find($lead_id);
        return view('sales/detail_sales')->with('tampilkan',$tampilkan);
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
