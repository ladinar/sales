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
           <button class="btn btn-success-sales pull-left" id="btn_add_customer" data-target="#modal_customer" data-toggle="modal">+ Customer</button>
		    </div>
      </div><br>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lead Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Code Name</th>
                  <th>Name Contact</th>
                  <th>Brand Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $datas)
                <tr>
                  <td>{{ $datas->code_name }}</td>
                  <td>{{ $datas->name_contact }}</td>
                  <td>{{ $datas->brand_name }}</td>
                  <td></td>
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

<!--MODAL ADD CUSTOMER-->
<div class="modal fade" id="modal_customer" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Add Customer</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('customer/store')}}" id="modalCustomer" name="modalCustomer">
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