@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Detail</a>
        </li>
        <li class="breadcrumb-item active">Sales</li>
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
				    <span class="degopen"><b>Open</b></span>
				    <a href='#' class='deg180'><span class="dot"></span></a>
				    <span class="degSD"><b>Solution Design</b></span>
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
                <h6 class="card-title mb-1 pull-right">{!!substr( $tampilkan->created_at,0,10 )!!}</h6>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <h4 class="pull-left">{{ $tampilkan->name_contact }}</h4>
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
            <form action="{{ url('store_sd')}}" method="POST">
              {!! csrf_field() !!}
              @if(Auth::User()->id_division == 'TECHNICAL PRESALES')
              <fieldset>
              @else
              <fieldset disabled>
              @endif
              <input type="" name="lead_id" id="lead_id" value="{{$tampilkan->lead_id}}" >
              <input type="" name="nik" id="nik" value="{{$tampilkan->nik}}" >
              <div class="form-group margin-left-right">
                <label for="assesment">-- Assessment --</label>
               <!--  <input class="form-control-medium float-left" type="email" aria-describedby="emailHelp" placeholder="Enter assesment" name="assesment" disabled="disabled" id="assesment"/> -->
                <textarea class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter assesment" name="assesment" id="assesment" disabled="disabled"></textarea>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('assesment'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}"/>
              </div>

               <div class="form-group margin-left-right">
                <label for="proof of value" class="margin-top-form">-- Proposed Design--</label>
                 <textarea class="form-control-medium float-left" type="email" aria-describedby="" placeholder="Enter Propossed Design" name="propossed_design" disabled="disabled" id="propossed_design"></textarea>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('propossed_design'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>

               <div class="form-group margin-left-right">
                <label for="propossed_design" class="margin-top-form">--Proof Of Value --</label>
                <input class="form-control-medium float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Proof Of Value" name="pov" disabled="disabled" id="pov" />
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('pov'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>

              <div class="form-group margin-left-right inputWithIcon inputIconBg">
                <label for="project_budget" class="margin-top-form">-- Project Budget --</label>
                <input class="form-control-medium float-left" id="trucated" type="text" aria-describedby="emailHelp" placeholder="Enter Project Management" name="project_budget" disabled="disabled" id="project_budget" />
                <i class="" aria-hidden="true">Rp.</i>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('project_budget'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>

               <div class="form-group margin-left-right">
                <label for="priority" class="margin-top-form">-- Priority --</label>
                <select class="form-control-medium float-left" id="priority"  name="priority" disabled required>
                  <option>-- Choose Priority --</option>
                  <option value="" >Contribute</option>
                  <option value="" >Fight</option>
                  <option value="" >Foot Print</option>
                  <option value="" >Guided</option>
                </select>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('priority'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>

              <div class="form-group margin-left-right ">
                <label for="proyek_size" class="margin-top-form">-- Project size --</label>
                <select class="form-control-medium float-left margin-bottom" id="proyek_size"  name="proyek_size" disabled required>
                  <option>-- Choose Project Size --</option>
                  <option value="" >Small</option>
                  <option value="" >Medium</option>
                  <option value="" >Advance</option>
                </select>
                <input type="checkbox" class="float-right" onclick="var input = document.getElementById('proyek_size'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
              </div>

              <div class="margin-left-right margin-top">
                <button class="btn btn-md btn-sd btn-primary float-left margin-bottom" type="submit">Submit</button>
                <button class="btn btn-md btn-sd btn-success float-right margin-bottom disabled">Raise To Tender</button>
              </div>
              </fieldset>
            </form>
              </div>
            </div>

      	<div class="col-md-6">
      		<div class="card mb-3">
              <h3 class="margin-left-right margin-top">Tender Project</h3>
              <hr class="">
      			<form action="{{ url('store_tp') }}"  method="POST" >
              {!! csrf_field() !!}
              @if(Auth::User()->id_division == 'SALES')
              <fieldset>
              @else
              <fieldset disabled>
              @endif
              <input type="" name="lead_id" id="lead_id" value="{{$tampilkan->lead_id}}" >
              <input type="" name="nik" id="nik" value="{{$tampilkan->nik}}" >
		          <div class="form-group margin-left-right">
		            <label for="assesment">--No Doc. Lelang--</label>
		            <input class="form-control float-left" type="text" aria-describedby="emailHelp" placeholder="Enter No Doc. Lelang" name="lelang" id="lelang" onkeypress="" />
		          </div>
		           <div class="form-group margin-left-right inputWithIcon inputIconBg">
		            <label for="submitted price" class="margin-top-form">--Submitted Price--</label>
		            <input class="form-control float-left" type="text" aria-describedby="" placeholder="Enter Submitted Price" name="submit_price" id="submit_price"  pattern="[0-9]*"/>
		            <i class="" aria-hidden="true">Rp.</i>
		          </div>
		           <div class="form-group margin-left-right  percentageIcon inputIconBg">
		            <label for="win probability" class="margin-top-form">--Win Probability--</label>
		            <input class="form-control float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Win Probability" name="win_prob" id="win_prob" maxlength="3"/>
		            <i class="" aria-hidden="true">%</i>
		          </div>
		           <div class="form-group margin-left-right">
		            <label for="project_name" class="margin-top-form">--Project Name--</label>
		            <input class="form-control float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Project Name" name="project_name" id="project_name"/>
		          </div>
		          <div class="form-group margin-left-right">
		            <label for="date" class="margin-top-form">--Submit Date--</label>
		            <input class="form-control float-left" type="date" aria-describedby="emailHelp" placeholder="Enter Submit Date" name="submit_date"  id="submit_date"/>
		          </div>
		          <div class="form-group margin-left-right">
		            <label for="quote number" class="margin-top-form">--Quote Number--</label>
		            <input class="form-control float-left margin-bottom" type="text" aria-describedby="emailHelp" placeholder="Enter Quote Number" name="q_num" readonly id="q_num"/>
		          </div>
		          <div class="margin-left-right margin-top">
                <button type="submit" class="btn btn-md btn-primary float-left margin-bottom">Submit</button>
                <button class="btn btn-md btn-success float-right margin-bottom disabled" id="btn-result">Result</button>
              </div>
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
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="ModalResult" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content ">
        <div class="modal-header">
          <h4 class="modal-title">Result</h4>
        </div>
        <div class="modal-body center">
          <a href="" class="btn btn-danger btn-lose"><b>LOSE</b></a>
          <a href="{{url('/sales')}}" class="btn btn-success btn-win margin-left"><b>WIN</b></a>
        </div>
      </div>
      
    </div>
  </div>
