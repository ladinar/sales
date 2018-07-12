@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 form-group">
           <a href="{{action('ReportController@downloadPdflead')}}" class="btn btn-warning pull-right margin-right-sales margin-bottom"><i class="fa fa-cloud-download"></i>&nbsp&nbspExport</a>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lead Table
          @if(Auth::User()->id_position == 'DIRECTOR')
          <a href="" class="btn btn-success float-right margin-left-custom">Show</a>
           <select class="form-control-report float-right margin-left-custom" id="dropdown2">
             <option value=""></option>
             <option value=""></option>
             <option value=""></option>
             <option value=""></option>
           </select>
           <select class="form-control-report pull-right" id="dropdown">
             <option value="customer">Costumer</option>
             <option value="sales">Sales</option>
             <option value="territory">Territory</option>
             <option value="status">Status</option>
           </select>
           @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Lead ID</th>
                  <th>Customer</th>
                  <th>Opty Name</th>
                  <th>Create Date</th>
                  <th>Owner</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody id="products-list" name="products-list">
                @foreach($lead as $data)
                <tr>
                  <td>{{ $data->lead_id }}</td>
                  <td>{{ $data->name_contact}}</td>
                  <td>{{ $data->opp_name }}</td>
                  <td>{{ $data->created_at}}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->amount }}</td>
                  <td>
                    @if($data->result == 'OPEN')
                      <label class="status-initial">INITIAL</label>
                    @elseif($data->result == '')
                      <label class="status-open">OPEN</label>
                    @elseif($data->result == 'SD')
                      <label class="status-sd">SD</label>
                    @elseif($data->result == 'TP')
                      <label class="status-tp">TP</label>
                    @elseif($data->result == 'WIN')
                      <label class="status-win">WIN</label>
                    @else
                      <label class="status-lose">LOSE</label>
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

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
      $('#dropdown').change(function(){
          /*console.log(this.value);
          console.log('result');*/
          $.ajax({
              type:"GET",
              url:"client",
              data:{
                id_client:this.value,
              },
              success: function(result){
                var append = "";
                $('#dropdown2').html(append)
                var append = "<option selected='selected'>Select Option</option>";

                if (result[1] == 'customer') {
                $.each(result[0], function(key, value){
                  append = append + "<option>" + value.name_contact + "</option>";
                });
                } else if (result[1] == 'sales') {
                  $.each(result[0], function(key, value){
                  append = append + "<option>" + value.name + "</option>";
                });
                } else if (result[1] == 'territory') {
                $.each(result[0], function(key, value){
                  append = append + "<option>" + value.id_territory + "</option>";
                });
                } else if (result[1] == 'status') {
                $.each(result[0], function(key, value){
                  append = append + "<option>" + value.result + "</option>";
                });
                }
                $('#dropdown2').html(append);
              },
          });
      });
  });
</script>
@endsection