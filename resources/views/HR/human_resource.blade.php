@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Sales</a>
        </li><!-- 
        <li class="breadcrumb-item active">Direktur</li> -->
      </ol>

      <div class="row">
		<div class="col-md-12">
			<button class="btn btn-primary margin-bottom float-left" id="modalAdd">Add</button>
		</div>
      </div>

      <!-- Example DataTables Card-->
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
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Lead id</th>
                  <th>Contact</th>
                  <th>Opty name</th>
                  <th>Closing date</th>
                  <th>Owner</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>2011/04/25</td>
                  <td>
                    <button class="btn btn-sm btn-danger fa fa-trash fa-lg" style="width: 40px;height: 40px"></button>
                    <button class="btn btn-sm btn-warning fa fa-pencil fa-lg" style="width: 40px;height: 40px"></button>
                    <button  class="btn btn-sm btn-primary fa fa-search-plus fa-lg" style="width: 40px;height: 40px"></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

  </div>
</div>
@endsection

 <div class="modal fade" id="ModalAdd" role="dialog">
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