@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Sales</a>
        </li>
      </ol>

      <div class="row">
		    <div class="col-md-12">
			     <button class="btn btn-primary margin-bottom margin-left-sales" id="btn_add_sales">Add</button>
		    </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lead Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Lead id</th>
                  <th>Customer</th>
                  <th>Opty name</th>
                  <th>Create date</th>
                  <th>Owner</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="products-list" name="products-list">
                @foreach($lead as $data)
                <tr>
                  <td><a href="{{ url ('/detail_project', $data->lead_id) }}">{{ $data->lead_id }}</a></td>
                  <td>{{ $data->name_contact}}</td>
                  <td>{{ $data->opp_name }}</td>
                  <td>{!!substr($data->created_at,0,10)!!}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->amount }}</td>
                  <td><div class="status-initial">Initial</div></td>
                  <td>
                    @if(Auth::User()->id_position == 'MANAGER' && Auth::User()->id_division == 'SALES')
                    <a href="{{url('/sho')}}" class="btn btn-sm sho">Handover</a>
                    @elseif(Auth::User()->id_position == 'MANAGER' && Auth::User()->id_division == 'TECHNICAL PRESALES')
                    <button type="button" class="btn btn-sm sho" onclick="assign('{{$data->lead_id}}')" data-toggle="modal" data-target="#assignModal">Assign</button>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 00:01 AM</div>
      </div>
  </div>
</div>
@endsection

<!--MODAL ADD PROJECT-->
<div class="modal fade" id="modal_lead" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Add Project</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('store')}}" id="modalSalesLead" name="modalSalesLead">
            @csrf
          <!-- <div class="form-group">
            <label for="lead_id">Lead Id</label>
            <input type="text" class="form-control" id="lead_id" name="lead_id" placeholder="Lead Id" readonly required>
          </div> -->

          <div class="form-group">
            <label for="">Costumer</label>
             <select class="form-control" id="contact" onkeyup="copytextbox();" name="contact" required>
              @foreach($name_code as $data)
                <option value="{{$data->id_contact}}">{{$data->code_name}}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
          <label for="">Opportunity Name</label>
          <input type="text" class="form-control" placeholder="Enter Opportunity Name" name="opp_name" id="opp_name" required>
         </div>

          <!-- <div class="form-group">
            <label for="">Owner</label>
            <select class="form-control" id="owner" onkeyup="copytextbox();" name="owner" required>
              <option value="{{Auth::User()->nik}}">{{Auth::User()->name}}</option>
            </select>
          </div> -->

          <div class="form-group  modalIcon inputIconBg">
            <label for="">Amount</label>
            <input type="text" class="form-control" placeholder="Enter Amount" name="amount" id="amount" required>
            <i class="" aria-hidden="true">Rp.</i>
          </div>

          <div class="form-group modalIcon inputIconBg">
            <label for="">Kurs To Dollar</label>
            <input type="text" class="form-control" disabled="disabled" placeholder="Kurs">
            <i class="" aria-hidden="true">&nbsp$&nbsp </i>
          </div>       
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <!--  <button type="submit" class="btn btn-primary" id="btn-save" value="add"  data-dismiss="modal" >Submit</button>
              <input type="hidden" id="lead_id" name="lead_id" value="0"> -->
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>

<!--MODAL ADD CUSTOMER-->
<div class="modal fade" id="modal_customer" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Add Customer</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="" id="modalCustomer" name="modalCustomer">
            @csrf
          
          <div class="form-group">
            <label for="code_name">Code Name</label>
            <input type="text" class="form-control" id="code_name" name="code_name" placeholder="Code Name" required>
          </div>
          <div class="form-group">
            <label for="name_contact">Customer Name</label>
            <input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Customer Name" required>
          </div>
          <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Brand Name" required>
          </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <!--  <button type="submit" class="btn btn-primary" id="btn-save" value="add"  data-dismiss="modal" >Submit</button>
              <input type="hidden" id="lead_id" name="lead_id" value="0"> -->
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>

  <div class="modal fade" id="assignModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Presales Assignment</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('assign_to_presales')}}" id="modalAssign" name="modalAssign">
            @csrf
          <div class="form-group row">
            <input type="text" name="coba_lead" id="coba_lead" value="" hidden>
            <label for="">Choose Presales Staff</label><br>
            <select class="form-control-small margin-left-custom" id="owner" name="owner" required>
              <option>-- Choose Owner --</option>
                @foreach($owner as $data)
                  @if($data->id_division == 'TECHNICAL PRESALES' && $data->id_position == 'STAFF')
                    <option value="{{$data->nik}}">{{$data->name}}</option>
                  @endif
                @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!--  <button type="submit" class="btn btn-primary" id="btn-save" value="add"  data-dismiss="modal" >Submit</button>
              <input type="hidden" id="lead_id" name="lead_id" value="0"> -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function copytextbox(){
        var contact = $("#contact option:selected").text();
        var owner = $("#owner option:selected").text();
        var d = new Date();
        var year = d.getFullYear().toString().substr(-2);
        var month = d.getMonth() + 1;

        document.getElementById('lead_id').value = contact + year + '0' + month;

        console.log(c);
    }

    function s_replace(){
        var s_r = $("#dataTable #lead_replace").text();
        console.log(s_r);

    }
  </script>
