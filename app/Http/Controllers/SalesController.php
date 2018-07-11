<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;
use App\User;
use DB;
use App\TenderProcess;
use Illuminate\Support\Collection;
use Auth;
use Month;
use PDF;
use App\solution_design;

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
        $division = DB::table('users')->select('id_division')->where('nik', $nik)->first();
        $div = $division->id_division;
        $position = DB::table('users')->select('id_position')->where('nik', $nik)->first();
        $pos = $position->id_position;
        if($ter != null){
            $lead = DB::table('sales_lead_register')
                ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                ->select('sales_lead_register.lead_id', 'tb_contact.id_contact', 'tb_contact.code_name', 'sales_lead_register.opp_name','tb_contact.name_contact',
                'sales_lead_register.created_at', 'sales_lead_register.amount', 'users.name')
                ->where('id_territory', $ter)
                ->get();
        } elseif($div == 'TECHNICAL PRESALES' && $pos == 'STAFF') {
            $lead = DB::table('sales_lead_register')
                ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                ->select('sales_lead_register.lead_id','tb_contact.name_contact', 'sales_lead_register.opp_name',
                'sales_lead_register.created_at', 'sales_lead_register.amount', 'users.name')
                ->where('id_division', $div)
                ->get();
        } else {
            $lead = DB::table('sales_lead_register')
                ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                ->select('sales_lead_register.lead_id', 'tb_contact.id_contact', 'tb_contact.code_name', 'sales_lead_register.opp_name','tb_contact.name_contact',
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
                    ->select('sales_lead_register.lead_id','sales_lead_register.nik','tb_contact.code_name', 'sales_lead_register.opp_name','tb_contact.name_contact',
                    'sales_lead_register.created_at', 'sales_lead_register.amount', 'users.name')
                    ->where('lead_id',$lead_id)
                    ->first();

        $tampilkans = DB::table('sales_solution_design')
                    ->join('users','users.nik','=','sales_solution_design.nik')
                    ->select('sales_solution_design.lead_id','sales_solution_design.nik','sales_solution_design.assessment','sales_solution_design.pov','sales_solution_design.pd','sales_solution_design.pb','sales_solution_design.priority','sales_solution_design.project_size','users.name')
                    ->where('lead_id',$lead_id)
                    ->first();

        $tampilkanc = DB::table('sales_tender_process')
                    ->select('sales_tender_process.lead_id','auction_number','submit_price','win_prob','project_name','submit_date','quote_number')
                    ->where('lead_id',$lead_id)
                    ->first();

        return view('sales/detail_sales',compact('tampilkan','tampilkans','tampilkanc'));
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
        $contact = $request['contact'];
        $name = DB::table('tb_contact')
                    ->select('code_name')
                    ->where('id_contact', $contact)
                    ->first();
        $inc = DB::table('sales_lead_register')
                    ->select('lead_id')
                    ->where('id_contact', $contact)
                    ->where('month', date("n"))
                    ->get();
        $increment = count($inc);
        $nomor = $increment+1;
        if($nomor < 10){
            $nomor = '0' . $nomor;
        }
        $lead = $name->code_name . date('y') . date('m') . $nomor;

        $tambah = new Sales();
        $tambah->lead_id = $lead;
        if(Auth::User()->id_division == 'SALES'){
            $tambah->nik = Auth::User()->nik;
        } else {
            $tambah->nik = $request['owner_sales'];
        }
        $tambah->id_contact = $request['contact'];
        $tambah->opp_name = $request['opp_name'];
        $tambah->month = date("n");
        $tambah->amount = $request['amount'];
        $tambah->save();

        return redirect('project');

        // $contact = $request['contact'];
        // $inc = DB::table('sales_lead_register')
        //             ->select(DB::raw('count(lead_id) as jumlah'))
        //             // ->select('lead_id')
        //             ->where('id_contact', $contact)
        //             // ->where(DB::raw("MONTH('created_at')") ," = ", date("n"))
        //             ->get();
        // // $inc2 = DB::raw("SELECT COUNT(*) FROM `sales_lead_register` WHERE Month(`created_at`) = " . date("n"));
        // $increment = var_dump($inc);

        // // echo "<pre>";
        // // print_r($inc2);
        // // echo "<pre>";

        // // $increment = $inc2; 
        // $nomor = $increment+1;
        // $lead = $request['contact'] . date('y') . date('m') . $nomor;
        // $tambah = new Sales();
        // $tambah->lead_id = $lead;
        // $tambah->nik = $request['owner'];
        // $tambah->id_contact = $request['contact'];
        // $tambah->opp_name = $request['opp_name'];
        // $tambah->amount = $request['amount'];
        // $tambah->save();

        // return redirect('project');
    }

    public function assign_to_presales(Request $request){

        $tambah = new solution_design();
        $tambah->lead_id = $request['coba_lead'];
        $tambah->nik = $request['owner'];
        $tambah->save();

        return redirect('project');

        // echo $request['coba_lead'];
    }

    public function raise_to_tender(Request $request){
        $tambah = new TenderProcess();
        $tambah->lead_id = $request['lead_id'];
        $tambah->save();

        return redirect()->back();
    }

    public function update_sd(Request $request, $lead_id)
    {
        $update = solution_design::where('lead_id', $lead_id)->first();
        if (is_null( $request['assesment'])) {
           $update->assessment = $request['assesment'];
           $update->update();
        }else if ($request['assesment'] == TRUE) {
            $update->assessment = $request['assesment'];
            $update->update();
        }

        if (is_null($request['propossed_design'])) {
           $update->pd = $request['propossed_design'];
           $update->update();
        }else if ($request['propossed_design'] == TRUE) {
           $update->pd = $request['propossed_design'];
           $update->update(); 
        }

        if ( is_null($request['pov'])) {
          $update->pov = $request['pov'];
          $update->update();  
        }else if ( $request['pov'] == TRUE) {
           $update->pov = $request['pov'];
           $update->update();   
        }

        if (is_null($request['project_budget'])) {   
            $update->pb = $request['project_budget'];
            $update->update();
        }else if ( $request['project_budget'] == TRUE) {
           $update->pb = $request['project_budget'];
           $update->update();   
        }

        if ( is_null($request['priority'])) {
          $update->priority = $request['priority'];
          $update->update();  
        }else if ( $request['priority'] == TRUE) {
           $update->priority = $request['priority'];
           $update->update();   
        }

        if ($request['proyek_size'] == '') {   
            $update->project_size = $request['proyek_size'];
            $update->update();
        }else if ( $request['proyek_size'] == TRUE) {
           $update->project_size = $request['proyek_size'];
           $update->update();   
        }

        return redirect()->back();
    }

    public function update_tp(Request $request, $lead_id)
    {
        $update = TenderProcess::where('lead_id', $lead_id)->first();
        if (is_null( $request['lelang'])) {
           $update->auction_number = $request['lelang'];
           $update->update();
        }else if ($request['lelang'] == TRUE) {
            $update->auction_number = $request['lelang'];
            $update->update();
        }

        if (is_null($request['submit_price'])) {
           $update->submit_price = $request['submit_price'];
           $update->update();
        }else if ($request['submit_price'] == TRUE) {
           $update->submit_price = $request['submit_price'];
           $update->update(); 
        }

        if ( is_null($request['win_prob'])) {
          $update->win_prob = $request['win_prob'];
          $update->update();  
        }else if ( $request['win_prob'] == TRUE) {
           $update->win_prob = $request['win_prob'];
           $update->update();   
        }

        if (is_null($request['project_name'])) {   
            $update->project_name = $request['project_name'];
            $update->update();
        }else if ( $request['project_name'] == TRUE) {
           $update->project_name = $request['project_name'];
           $update->update();   
        }

        if ( is_null($request['submit_date'])) {
          $update->submit_date = $request['submit_date'];
          $update->update();  
        }else if ( $request['submit_date'] == TRUE) {
           $update->submit_date = $request['submit_date'];
           $update->update();   
        }

        if ($request['q_num'] == '') {   
            $update->quote_number = $request['q_num'];
            $update->update();
        }else if ( $request['q_num'] == TRUE) {
           $update->quote_number = $request['q_num'];
           $update->update();   
        }

        return redirect()->back();
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

    public function downloadPdf()
    {
        $nik = Auth::User()->nik;
        $territory = DB::table('users')->select('id_territory', 'id_division', 'id_position')->where('nik', $nik)->first();
        $ter = $territory->id_territory;
        $lead_id = DB::table('sales_lead_register')
                ->join('users', 'users.nik', '=', 'sales_lead_register.nik')
                ->join('tb_contact', 'sales_lead_register.id_contact', '=', 'tb_contact.id_contact')
                ->select('sales_lead_register.lead_id', 'tb_contact.id_contact', 'tb_contact.name_contact', 'sales_lead_register.opp_name',
                'sales_lead_register.created_at', 'sales_lead_register.amount', 'users.name')
                ->where('id_territory', $ter)
                ->get();

        $pdf = PDF::loadView('report.ter_pdf', compact('lead_id'));
        return $pdf->download('report.pdf');
    }
}
