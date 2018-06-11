@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Detail Sales Hand Over</a>
        </li><!-- 
        <li class="breadcrumb-item active">Direktur</li> -->
      </ol>

      <div class="row">
      	<div class="col-md-12">
      		<div class="card mb-3">
          <div class="card-body">
            <h6 class="card-title mb-1 pull-left">A/BB/CC/DD/E/F</h6>
            <h6 class="card-title mb-1 pull-right">06-06-2018</h6>
          </div>
          <hr class="">
          <div class="card-body small bg-faded">
            <div class="media">
              <div class="media-body">
                <h6>What is Lorem Ipsum?
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h6>
				<div style="margin-top: 20px">
					<h6>24-06-2018<br>Rp. 2.500.000,00</h6>
				</div>
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">Posted 32 mins ago</div>
        </div>
      	</div>
      </div>

      <div class="row">
      	<div class="col-md-12">
      		<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> <b>Sales Attendee</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Lead id</th>
                  <th>Sales Name</th>
                  <th>Name Project</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Lead id</th>
                  <th>Sales Name</th>
                  <th>Name Project</th>
                  <th>Date</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>A/BB/CC/DD/EE/F</td>
                  <td>Maulana</td>
                  <td>Pengadaan Jaringan di Bank BCA</td>
                  <td>24-06-2018</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      	</div>
      </div>
  </div>
</div>
