<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;
use App\User;
use DB;
use App\TenderProcess;
use Illuminate\Support\Collection;
use Auth;

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
        $nik = Auth::User()->nik;
        $territory = DB::table('users')->select('id_territory')->where('nik', $nik)->first();
        $ter = $territory->id_territory;
        if($ter != null){
            $lead = DB::table('sales_lead_register')
                ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                ->select('sales_lead_register.lead_id', 'tb_contact.id_contact', 'tb_contact.code_name', 'sales_lead_register.opp_name',
                'sales_lead_register.created_at', 'sales_lead_register.amount', 'users.name')
                ->where('id_territory', $ter)
                ->get();
        } else {
            $lead = DB::table('sales_lead_register')
                ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                ->select('sales_lead_register.lead_id', 'tb_contact.id_contact', 'tb_contact.code_name', 'sales_lead_register.opp_name',
                'sales_lead_register.created_at', 'sales_lead_register.amount', 'users.name')
                ->get();
        }
        return view('sales/sales')->with('lead', $lead);
    }



    public function detail_sales($lead_id)
    {
        $tampilkan = DB::table('sales_lead_register')
                    ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                    ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                    ->select('sales_lead_register.lead_id','sales_lead_register.nik','tb_contact.code_name', 'sales_lead_register.opp_name',
                    'sales_lead_register.created_at', 'sales_lead_register.amount', 'users.name')
                    ->where('lead_id',$lead_id)
                    ->first();
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
       
        $tambah = new Sales();
        $tambah->lead_id = $request['lead_id'];
        $tambah->nik = $request['owner'];
        $tambah->id_contact = $request['contact'];
        $tambah->opp_name = $request['opp_name'];
        $tambah->amount = $request['amount'];
        $tambah->save();

        return redirect('sales');
    }

     public function store_tp(Request $request)
    {
        
        $tambah = new TenderProcess();
        $tambah->lead_id = $request['lead_id'];
        $tambah->nik = $request['nik'];
        $tambah->auction_number = $request['lelang'];
        $tambah->submit_price = $request['submit_price'];
        $tambah->win_prob = $request['win_prob'];
        $tambah->project_name = $request['project_name'];
        $tambah->submit_date = $request['submit_date'];
        $tambah->quote_number = $request['q_num'];
        $tambah->save();

        return redirect()->to('/sales');
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

    public function s_replace()
    {

        $s_r = DB::table('sales_lead_register')
                        ->select('lead_id')
                        ->get();

        return view('sales/sales')->with('s_r', $s_r);
    }

    public function customer_index()
    {
        return view('sales/customer');   
    }
}
