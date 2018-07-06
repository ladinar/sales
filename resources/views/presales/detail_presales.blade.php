@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Detail</a>
        </li>
        <li class="breadcrumb-item active">Pre-Sales</li>
      </ol>

      <!--content-->
   <div class="row">
          <div class="col-md-6">
        <div class='circle-container padding-right'>
            <a href='#'>
              <span class="deg315 dot"></span>
              <span class="deginitial"><b>Initial</b></span> 
            </a>
            <a href='#' class='deg45'><span class="dot"></span></a>
            <span class="degopen"><b>Open/Pending</b></span>
            <a href='#' class='deg180'><span class="dot"></span></a>
            <span class="degSD"><b>Sales Design</b></span>
            <a href='#' class='deg225'><span class="dot"></span></a>
            <span class="degTP"><b>Tender Project</b></span>
            <a href='#' class='deg135'><span class="dot"></span></a>
            <span class="degwin"><b>Win/Lose</b></span>
            <div class="step-content">
            </div>
        </div>
        <button class="btn btn-primary" type="button" name="next" class="active">Next Step</button>
          </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="card-body">
                <h6 class="card-title mb-1 pull-left">{{ $tampilkan->lead_id }}</h6>
                <h6 class="card-title mb-1 pull-right">{{ $tampilkan->closing_date }}</h6>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <h4 class="pull-left">{{ $tampilkan->contact }}</h4>
                <h5 class="pull-right">Owner : <i>{{$tampilkan->name}}</i></h5>
              </div>
              <div class="card-body small bg-faded">
                <div class="media">
                  <div class="media-body">
                    <h6>{{ $tampilkan->opp_name }}</h6>
                    <h6><b>Amount : Rp {{ $tampilkan->amount }}</b></h6>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted 32 mins ago</div>
            </div>
          </div>
      </div>
          <div class="row margin-top">
            <div class="col-md-6">
              <div class="card mb-3">
              <h3 class="margin-left-right margin-top">Solution Design</h3>
            <hr class="">
            <form action="{{ url('store') }}" method="POST">
              <fieldset>
              <div class="form-group margin-left-right">
                <label for="assesment">-- Assesment --</label>
               <!--  <input class="form-control-medium float-left" type="email" aria-describedby="emailHelp" placeholder="Enter assesment" name="assesment" disabled="disabled" id="assesment"/> -->
                <textarea class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter assesment" name="assesment" disabled="disabled" id="assesment"></textarea>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('assesment'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right">
                <label for="proof of value" class="margin-top-form">-- Proof Of Value --</label><!--<input class="form-control-medium float-left" type="email" aria-describedby="" placeholder="Enter Proof Of Value" name="pov" disabled="disabled" id="pov"/> -->
                 <textarea class="form-control-medium float-left" type="email" aria-describedby="" placeholder="Enter Proof Of Value" name="pov" disabled="disabled" id="pov"></textarea>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('pov'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right">
                <label for="propossed_design" class="margin-top-form">-- Proposed Design --</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Propossed Design" name="propossed_design" disabled="disabled" id="propossed_design" onkeypress="myFunction()" />
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('propossed_design'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right inputWithIcon inputIconBg">
                <label for="project_management" class="margin-top-form">-- Project Management --</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Project Management" name="project_management" disabled="disabled" id="project_management"/>
                <i class="" aria-hidden="true">Rp.</i>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('project_management'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right  inputWithIcon inputIconBg">
                <label for="maintenance" class="margin-top-form">-- Maintenance --</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Maintenance" name="maintenance" disabled="disabled" id="maintenance"/>
                <i class="" aria-hidden="true">Rp.</i>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('maintenance'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right">
                <label for="priority" class="margin-top-form">-- Priority --</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter priority" name="priority" disabled="disabled" id="priority"/>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('priority'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
              <div class="form-group margin-left-right ">
                <label for="proyek_size" class="margin-top-form">-- Project size --</label>
                <input class="form-control-medium float-left margin-bottom" type="text" aria-describedby="emailHelp" placeholder="Enter Project size" name="proyek_size" disabled="disabled" id="proyek_size"/>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('proyek_size'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
              <div class="margin-left-right margin-top">
                <button class="btn btn-md btn-sd btn-primary float-left margin-bottom" type="submit">Submit</button>
                <button class="btn btn-md btn-sd btn-success float-right margin-bottom">Raise To Tender</button>
              </div>
              </fieldset>
            </form>
          </div>
            </div>

            <div class="col-md-6">
          <div class="card mb-3">
              <h3 class="margin-left-right margin-top">Tender Project</h3>
            <hr class="">
            <form id="myForm" title="Please Fill Sales Design Form !!!">
              <fieldset disabled="disabled">
              <div class="form-group margin-left-right">
                <label for="assesment">--No Doc. Lelang--</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter No Doc. Lelang" name="lelang" disabled="disabled" id="lelang"/>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('lelang'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right inputWithIcon inputIconBg">
                <label for="submitted price" class="margin-top-form">--Submitted Price--</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="" placeholder="Enter Submitted Price" name="submit_price" disabled="disabled" id="submit_price"/>
                
                <i class="" aria-hidden="true">Rp.</i>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('submit_price'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right">
                <label for="win probability" class="margin-top-form">--Win Probability--</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Win Probability" name="win_prob" disabled="disabled" id="win_prob"/>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('win_prob'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
               <div class="form-group margin-left-right">
                <label for="project_name" class="margin-top-form">--Project Name--</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Project Name" name="project_name" disabled="disabled" id="project_name"/>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('project_name'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
              <div class="form-group margin-left-right">
                <label for="date" class="margin-top-form">--Submit Date--</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Submit Date" name="date" disabled="disabled" id="date"/>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('date'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
              <div class="form-group margin-left-right ">
                <label for="quote number" class="margin-top-form">--Quote Number--</label>
                <input class="form-control-medium float-left margin-bottom" type="text" aria-describedby="emailHelp" placeholder="Enter Quote Number" name="q_num" disabled="disabled" id="q_num"/>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('q_num'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>
              </fieldset>
            </form>
          </div>  
        </div>
          </div>
      </div>
  </div>
@endsection


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Propossed Design</h4>
        </div>
        <div class="modal-body">
          <textarea class="form-control" type="text" aria-describedby="emailHelp" placeholder="Enter propossed design" name="proposs" id="proposs"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="save">submit</button>
        </div>
      </div>
      
    </div>
  </div>
