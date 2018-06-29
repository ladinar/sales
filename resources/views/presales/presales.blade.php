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
                  <th>Lead id</th>
                  <th>Contact</th>
                  <th>Opty name</th>
                  <th>Close date</th>
                  <th>Owner</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($lead as $data)
                <tr>
                  <td><a href="{{url('/detail_presales', $data->lead_id)}}">{{$data->lead_id}}</a></td>
                  <td>{{$data->contact}}</td>
                  <td>{{$data->opp_name}}</td>
                  <td>{{$data->closing_date}}</td>
                  <td></td>
                  <td>{{$data->amount}}</td>
                  <td><div class="status-initial">Initial</div></td>
                  <td></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
  </div>
</div>
