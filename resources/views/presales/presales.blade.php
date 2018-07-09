@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Presales</a>
        </li>
        
      </ol>

      <div class="row">
    <div class="col-md-12">
      <button class="btn btn-warning margin-bottom float-right">Attend</button>
    </div>
      </div>

<div class="card mb-3">
        <div class="card-header">
          <i ></i> Lead Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <td></td>
                  <th>Lead id</th>
                  <th>Contact</th>
                  <th>Opty name</th>
                  <th>Close date</th>
                  <th>Owner</th>
                  <th>Amount</th>
                  <th>Status</th>
                  @if(Auth::User()->id_position == 'MANAGER' && Auth::User()->id_division == 'TECHNICAL PRESALES')
                  <th>Action</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach($lead as $data)
                <tr>
                  <td></td>
                  <td><a href="{{url('/detail_presales', $data->lead_id)}}">{{$data->lead_id}}</a></td>
                  <td>{{$data->name_contact}}</td>
                  <td>{!!substr($data->opp_name,0,10)!!}...</td>
                  <td>{{$data->closing_date}}</td>
                  <td></td>
                  <td>{{$data->amount}}</td>
                  <td><div class="status-initial">Initial</div></td>
                  @if(Auth::User()->id_position == 'MANAGER' && Auth::User()->id_division == 'TECHNICAL PRESALES')
                  <td><button type="button" class="btn btn-sm sho" data-toggle="modal" data-target="#assignModal">Assign</button></td>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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
          <form method="POST" action="" id="modalAssign" name="modalAssign">
          <div class="form-group row">
            <label for="">Choose Presales Staff</label><br>
            <select class="form-control-small margin-left-custom" id="owner" onkeyup="copytextbox();" name="owner" required>
              <option>-- Choose Owner --</option>
               @foreach($owner as $data)
              <option value="{{$data->nik}}">{{$data->name}}</option>
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
   function s_replace(){
        var s_r = $("#dataTable #lead_replace").text();
        console.log(s_r);

    }
</script>
