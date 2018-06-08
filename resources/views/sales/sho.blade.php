@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Sales Handover</a>
        </li><!-- 
        <li class="breadcrumb-item active">Direktur</li> -->
      </ol>

       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lead Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>PID</th>
                  <th>Scope Of Work</th>
                  <th>Timeline</th>
                  <th>Time Of Payment</th>
                  <th>Budget</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>PID</th>
                  <th>Scope Of Work</th>
                  <th>Timeline</th>
                  <th>Time Of Payment</th>
                  <th>Budget</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td><a href="{{url('/detail_sho')}}">A/BB/CC/DD/EE/F</a></td>
                  <td>System Architect</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
  </div>
</div>