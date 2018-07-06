<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\solution_design;
use App\Sales;
use DB;

class PRESALESController extends Controller
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
                ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                ->select('sales_lead_register.lead_id','tb_contact.name_contact', 'sales_lead_register.opp_name',
                'sales_lead_register.closing_date', 'sales_lead_register.amount', 'users.name')
                ->get();
        return view('presales/presales')->with('lead', $lead);
    }

    public function detail_presales($lead_id)
    {
        $tampilkan = Sales::find($lead_id);
        return view('presales/detail_presales')->with('tampilkan',$tampilkan);
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
            'assesment' => 'required',
            'pov' => 'required',
            'propossed_design' => 'required',
            'project_management' => 'required',
            'maintenance'   => 'required',
            'priority' => 'required',
            'proyek_size' => 'required'
        ]); 

        $tambah = new solution_design();
        $tambah->assesment = $request('assesment');
        $tambah->pov = $request['pov'];
        $tambah->pd = $request['propossed_design'];
        $tambah->pm = $request['project_management'];
        $tambah->ms = $request['maintenance'];
        $tambah->priority = $request['priority'];
        $tambah->project_size = $request['proyek_size'];
        $tambah->save();

        return redirect()->to('sales/sales');
        //
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lead_id)
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

      public function s_replace(){

        $s_r = DB::table('sales_lead_register')
                        ->select('lead_id')
                        ->get();

        return view('sales/sales')->with('s_r', $s_r);
    }
}
