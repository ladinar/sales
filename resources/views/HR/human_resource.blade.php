@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Human Resource</a>
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
                  <th>Employees Name</th>
                  <th>Division</th>
                  <th>Position</th>
                  <th>Address</th>
                  <th>Salary</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Lead id</th>
                  <th>Employees Name</th>
                  <th>Division</th>
                  <th>Position</th>
                  <th>Address</th>
                  <th>Salary</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>A/BB/CC/DD/EE/F</td>
                  <td>System Architect</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>2011/04/25</td>
                  <td>
                    <button class="btn btn-sm btn-danger fa fa-trash fa-lg" style="width: 40px;height: 40px"></button>
                    <button class="btn btn-sm btn-warning fa fa-pencil fa-lg" style="width: 40px;height: 40px"></button>
                    <button  class="btn btn-sm btn-primary fa fa-search-plus fa-lg" style="width: 40px;height: 40px" id="btn-View"></button>
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
          <h4 class="modal-title">Add Employees</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
          <label for="">NIK</label>
          <input id="nik" type="text" class="form-control" placeholder="Your NIK" disabled required>
         </div>
         <div class="form-group">
          <label for="">Employees Name</label>
          <input id="epmloyees_name" type="text" class="form-control" placeholder="Enter Name" required>
         </div>
         <div class="form-group">
          <label for="">Email</label>
          <input id="email" type="email" class="form-control" placeholder="Enter Email" required>
         </div>
         <div class="form-group">
          <label for="">Password</label>
          <input id="password" type="password" class="form-control" placeholder="Enter Password" required>
         </div>
         <div class="form-group">
          <label for="">Company</label>
          <select id="company" class="form-control" onkeyup="copytextbox();">
            <option>-- Select Company --</option>
            @foreach($company as $data)
            <option value="{{$data->id_company}}">{{$data->name_company}}</option>
            @endforeach
          </select>
         </div>
         <div class="form-group">
          <label for="">Division</label>
          <select id="division" class="form-control">
            <option>-- Select Division --</option>
            @foreach($division as $data)
            <option value="{{$data->id_division}}">{{$data->name_division}} ({{$data->name_sub_division}})</option>
            @endforeach
          </select>
         </div>
         <div class="form-group">
          <label for="">Position</label>
          <select id="position" class="form-control" required>
            <option>-- Select Position --</option>
            @foreach($position as $data)
            <option value="{{$data->id_position}}">{{$data->name_position}}</option>
            @endforeach
          </select>
         </div>
         <div class="form-group">
          <label for="">Territory</label>
          <select id="territory" class="form-control" onkeyup="copytextbox();">
            <option>-- Select Territory --</option>
            @foreach($territory as $data)
            <option value="{{$data->id_territory}}">{{$data->name_territory}}</option>
            @endforeach
          </select>
         </div>
         <div class="form-group">
            <label for="">Date Of Entry</label>
            <input id="date_of_entry" type="date" class="form-control" onkeyup="copytextbox();">
         </div>
         <div class="form-group">
            <label for="">Date Of Birth</label>
            <input id="date_of_birth" type="date" class="form-control" onkeyup="copytextbox();">
         </div>
         <div class="form-group">
          <label for="">Address</label>
          <textarea id="address" type="text" class="form-control" placeholder="Enter Address" required></textarea>
         </div>
         <div class="form-group">
          <label for="">Phone Number</label>
          <input id="phone_number" type="text" class="form-control" placeholder="Enter Phone Number" required>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="modalView" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Detail Employees</h4>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="container">
              <div class="row">
                  <div class="col-md-6 margin-bottom margin-top margin-right-80"> 
                    <img src="https://imagesvc.timeincapp.com/v3/mm/image?url=http%3A%2F%2Fcdn-img.instyle.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F684xflex%2Fpublic%2Fimages%2F2017%2F08%2F080817-shawn-mendes-lead.jpg%3Fitok%3DUFqhB4bh&w=700&q=85" alt="Avatar" style="width:75%" >
                  </div>
                  <div class="col-md-6 margin-top ">
                      <h6><b>Name : </b></h6>
                      <input type="" name="" class="input-style" value="Shawn Mendes"><br>
                      <h6><b>Division : </b></h6>
                      <input type="" name="" class="input-style" value="Software Engineer"><br>
                      <h6><b>Salary : </b></h6>
                      <input type="" name="" class="input-style" value="Rp 4.000.000,00">
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <script type="text/javascript">
    function copytextbox(){
        var date_of_entry = document.getElementById('date_of_entry').value;
        var date_of_birth = document.getElementById('date_of_birth').value

        document.getElementById('nik').value = document.getElementById('company').value + date_of_entry.substr(2, 2) + date_of_entry.substr(5, 2) + date_of_birth.substr(2, 2) + date_of_birth.substr(5, 2);
    }
  </script>