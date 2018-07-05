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
                  <th>PID</th>
                  <th>Scope Of Work</th>
                  <th>Timeline</th>
                  <th>Time Of Payment</th>
                  <th>Budget</th>
                </tr>
              </thead>
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
            <label for="pid">PID</label>
            <input type="text" class="form-control" id="pid" disabled="disabled" placeholder="PID">
          </div>
          <div class="form-group">
            <label for="">Scope of Work</label>
            <input type="text" class="form-control" id="sow" placeholder="Scope of Work">
          </div>
          <div class="form-group">
          <label for="">Timeline</label>
          <input type="text" class="form-control" placeholder="Enter Timeline" name="timeline">
         </div>
          <div class="form-group">
            <label for="">Time of Payment</label>
            <input type="date" id="time_of_payment" class="form-control" name="time_of_payment">
          </div>
          <div class="form-group  modalIcon inputIconBg">
            <label for="">Budget</label>
            <input type="text" class="form-control" placeholder="Enter Budget" name="amount">
            <i class="" aria-hidden="true">Rp.</i>
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