@extends('template.template')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Detail Sales</a>
        </li><!-- 
        <li class="breadcrumb-item active">Direktur</li> -->
      </ol>

      <!--content-->
      <div class="row">
      		<div class="col-md-6">
      			<div class='circle-container padding-right'>
				    <a href='#' class='deg315'><span class="dot active"></span></a>
				    <a href='#' class='deg45'><span class="dot"></span></a>
				    <a href='#' class='deg135'><span class="dot"></span></a>
				    <a href='#' class='deg180'><span class="dot"></span></a>
				    <a href='#' class='deg225'><span class="dot"></span></a>
				</div>
      		</div>
      		<div class="col-md-6">
      			<div class="card mb-3">
              <div class="card-body">
                <h6 class="card-title mb-1 pull-left">A/BB/CC/DD/E/F</h6>
                <h6 class="card-title mb-1 pull-right">06-06-2018</h6>
              </div>
              <hr class="my-0">
              <div class="card-body py-2 small">
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                <a class="mr-3 d-inline-block" href="#">
                  <i class="fa fa-fw fa-comment"></i>Comment</a>
                <a class="d-inline-block" href="#">
                  <i class="fa fa-fw fa-share"></i>Share</a>
              </div>
              <hr class="my-0">
              <div class="card-body small bg-faded">
                <div class="media">
                  <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                  <div class="media-body">
                    <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                    <ul class="list-inline mb-0">
                      <li class="list-inline-item">
                        <a href="#">Like</a>
                      </li>
                      <li class="list-inline-item">·</li>
                      <li class="list-inline-item">
                        <a href="#">Reply</a>
                      </li>
                    </ul>
                    <div class="media mt-3">
                      <a class="d-flex pr-3" href="#">
                        <img src="http://placehold.it/45x45" alt="">
                      </a>
                      <div class="media-body">
                        <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item">
                            <a href="#">Like</a>
                          </li>
                          <li class="list-inline-item">·</li>
                          <li class="list-inline-item">
                            <a href="#">Reply</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer small text-muted">Posted 32 mins ago</div>
            </div>
      		</div>
      </div>
  </div>
</div>
@endsection