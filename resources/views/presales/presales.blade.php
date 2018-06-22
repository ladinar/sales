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
                  <th>Sales name</th>
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
                <tr>
                  <td><a href="{{url('/detail_presales')}}">AA/BB/CC</a></td>
                  <td>Hendy</td>
                  <td>Bank BJB</td>
                  <td>Hendy</td>
                  <td>2011/04/25</td>
                  <td>Bank BJB</td>
                  <td>Rp. 20.000.000</td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
  </div>
</div>
