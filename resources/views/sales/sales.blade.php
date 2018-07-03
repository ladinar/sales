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
			<button class="btn btn-primary margin-bottom float-left" id="btnAdd">Add</button>
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
                  <th>Contact</th>
                  <th>Opty name</th>
                  <th>Closing date</th>
                  <th>Owner</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($lead as $data)
                <tr>
                  <td><a href="{{url('/detail_sales', $data->lead_id)}}">{{$data->lead_id}}</a></td>
                  <td>{{$data->contact}}</td>
                  <td>{{$data->opp_name}}</td>
                  <td>{{$data->closing_date}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->amount}}</td>
                  <td><div class="status-initial">Initial</div></td>
                  <td><a href="{{url('/sho')}}" class="btn btn-sm sho">Handover</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
  </div>
</div>
@endsection

<!--MODAL ADD PROJECT-->
<div class="modal fade" id="modalAdd" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Add Project</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('store')}}">
            @csrf
          <div class="form-group">
            <label for="lead_id">Lead Id</label>
            <input type="text" class="form-control" id="lead_id" disabled="disabled" placeholder="Lead Id">
          </div>
          <div class="form-group">
            <label for="">Contact</label>
            <select class="form-control" id="contact" onkeyup="copytextbox();" name="contact">
              <option>-- Choose Contact --</option>
              @foreach($contact_name as $data)
              <option value="{{$data->contact}}">{{$data->contact}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label for="">Opportunity Name</label>
          <input type="text" class="form-control" placeholder="Enter Opportunity Name" name="opp_name">
         </div>
          <div class="form-group">
            <label for="">Closing Date</label>
            <input type="date" id="closing_date" class="form-control" name="closing_date" onkeyup="copytextbox();" name="closing_date">
          </div>
          <div class="form-group">
            <label for="">Owner</label>
            <select class="form-control" id="owner" onkeyup="copytextbox();" name="owner">
              <option>-- Choose Owner --</option>
               @foreach($owner as $data)
              <option value="{{$data->nik}}">{{$data->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group  modalIcon inputIconBg">
            <label for="">Amount</label>
            <input type="text" class="form-control" placeholder="Enter Amount" name="amount">
            <i class="" aria-hidden="true">Rp.</i>
          </div>
          <div class="form-group modalIcon inputIconBg">
            <label for="">Kurs To Dollar</label>
            <input type="text" class="form-control" disabled="disabled" placeholder="Kurs">
            <i class="" aria-hidden="true">&nbsp$&nbsp </i>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" value="add" id="btn-save" data-dismiss="modal">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Attend-->
  <div class="modal fade" id="ModalAttendee" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Sales Attendee</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="lead_id">Lead Id</label>
            <input type="text" class="form-control" id="lead_id" disabled="disabled" placeholder="Lead Id">
          </div>
          <div class="form-group">
          <label for="">Sales Name</label>
          <input type="text" class="form-control" placeholder="Enter Sales Name">
         </div>
         <div class="form-group">
          <label for="">Name Project</label>
          <input type="text" class="form-control" placeholder="Enter Name Project">
         </div>
          <div class="form-group">
            <label for="">Date</label>
            <input type="date" class="form-control" >
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function copytextbox(){
        var contact = document.getElementById('contact').value;
        var owner = document.getElementById('owner').value;
        var d = new Date();
        var year = d.getUTCFullYear();
        var month = d.getUTCMonth() + 1; 
        var number = 0;
        var numbers = number++;

        document.getElementById('lead_id').value = contact.substr(0, 1)+ contact.substr(4, 4)+ "/" + document.getElementById('contact').value + "/"+ document.getElementById('owner').value + "/" + year + month + numbers;
    }
  </script>
  <script src="{{asset('js/ajaxscript.js')}}"></script>