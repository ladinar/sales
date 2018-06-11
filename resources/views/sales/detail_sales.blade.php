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
				    <a href='#' class='deg315'><span class="dot active"></span></a>
				    <span class="deginitial"><b>Initial</b></span> 
				    <a href='#' class='deg45'><span class="dot active"></span></a>
				    <span class="degopen"><b>Open/Pending</b></span>
				    <a href='#' class='deg180'><span class="dot"></span></a>
				    <span class="degSD"><b>Sales Design</b></span>
				    <a href='#' class='deg225'><span class="dot"></span></a>
				    <span class="degTP"><b>Tender Project</b></span>
				    <a href='#' class='deg135'><span class="dot"></span></a>
				    <span class="degwin"><b>Win/Lose</b></span>
				</div>
      		</div>
      		<div class="col-md-6">
      			<div class="card mb-3">
              <div class="card-body">
                <h6 class="card-title mb-1 pull-left">A/BB/CC/DD/E/F</h6>
                <h6 class="card-title mb-1 pull-right">06-06-2018</h6>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <h2>BANK BJB</h2>
                <h5>Hadi Wijaya</h5>
              </div>
              <div class="card-body small bg-faded">
                <div class="media">
                  <div class="media-body">
                    <h6>What is Lorem Ipsum?
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h6>
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
      			<form id="myForm" title="Please Fill Tender Project Form !!!">
      				<fieldset disabled="disabled">
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
		           <div class="form-group margin-left-right inputWithIcon inputIconBg">
		            <label for="maintenance" class="margin-top-form">-- Maintenance --</label>
		            <input class="form-control-medium float-left" type="text" aria-describedby="" placeholder="Enter Maintenance" name="maintenance" disabled="disabled" id="maintenance"/>
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
		          </div><!-- 
		          <div class="margin-left-right margin-top">
		          	<button class="btn btn-md btn-primary float-left margin-bottom">Submit</button>
		          	<button class="btn btn-md btn-success float-right margin-bottom">Raise To Tender</button>
		          </div> -->
      				</fieldset>
        		</form>
      		</div>	
      	</div>
      	<div class="col-md-6">
      		<div class="card mb-3">
      				<h3 class="margin-left-right margin-top">Tender Project</h3>
      			<hr class="">
      			<form>
		          <div class="form-group margin-left-right">
		            <label for="assesment">--No Doc. Lelang--</label>
		            <input class="form-control float-left" type="text" aria-describedby="emailHelp" placeholder="Enter No Doc. Lelang" name="lelang" id="lelang" onkeypress="" required/>
		            <!-- <input type="checkbox" class="float-right" onclick="var input = document.getElementById('lelang'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}"  /> -->
		          </div>
		           <div class="form-group margin-left-right inputWithIcon inputIconBg">
		            <label for="submitted price" class="margin-top-form">--Submitted Price--</label>
		            <input class="form-control float-left" type="text" aria-describedby="" placeholder="Enter Submitted Price" name="submit_price" id="submit_price"  pattern="[0-9]*" required />
		            <i class="" aria-hidden="true">Rp.</i>
		            <!-- <input type="checkbox" class="float-right" onclick="var input = document.getElementById('submit_price'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" /> -->
		          </div>
		           <div class="form-group margin-left-right  percentageIcon inputIconBg">
		            <label for="win probability" class="margin-top-form">--Win Probability--</label>
		            <input class="form-control float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Win Probability" name="win_prob" id="win_prob" maxlength="3" required />
		            <i class="" aria-hidden="true">%</i>
		            <!-- <input type="checkbox" class="float-right" onclick="var input = document.getElementById('win_prob'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" /> -->
		          </div>
		           <div class="form-group margin-left-right">
		            <label for="project_name" class="margin-top-form">--Project Name--</label>
		            <input class="form-control float-left" type="text" aria-describedby="emailHelp" placeholder="Enter Project Name" name="project_name" id="project_name"/>
		           <!--  <input type="checkbox" class="float-right" onclick="var input = document.getElementById('project_name'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" /> -->
		          </div>
		          <div class="form-group margin-left-right">
		            <label for="date" class="margin-top-form">--Submit Date--</label>
		            <input class="form-control float-left" type="date" aria-describedby="emailHelp" placeholder="Enter Submit Date" name="date"  id="date"/>
		           <!--  <input type="checkbox" class="float-right" onclick="var input = document.getElementById('date'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" /> -->
		          </div>
		          <div class="form-group margin-left-right">
		            <label for="quote number" class="margin-top-form">--Quote Number--</label>
		            <input class="form-control float-left margin-bottom" type="text" aria-describedby="emailHelp" placeholder="Enter Quote Number" name="q_num" disabled="disabled" id="q_num"/>
		           <!--  <input type="checkbox" class="float-right" onclick="var input = document.getElementById('q_num'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" /> -->
		          </div>
		      <div class="margin-left-right margin-top">
                <button class="btn btn-md btn-primary float-left margin-bottom">Submit</button>
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
