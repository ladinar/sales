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
            <a href='#' class='deg45'><span class="dot active"></span></a>
            <a href='#' class='deg135'><span class="dot active"></span></a>
            <a href='#' class='deg180'><span class="dot active"></span></a>
            <a href='#' class='deg225'><span class="dot active"></span></a>
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
            </div>
          </div>
      </div><br><br>

      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms SD</h1><br>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Assesment</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Proof of Value</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Proposed Design</label>
                                            <input class="form-control">
                                        </div>
                                        <label>Project Manager</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <label>Pro Service</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <label>Maintenance</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Priority</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Project Size</label>
                                            <input class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                    
                                    <form role="form">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect">No Doc Lelang</label>
                                                <input class="form-control" id="disabledInput" type="text" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Submitted Price</label>
                                                <input class="form-control" id="disabledInput" type="text" disabled>
                                            </div>
                                            <label for="disabledSelect">Win Probability</label>
                                            <div class="form-group input-group">
                                              <input type="text" class="input class="form-control" id="disabledInput" type="text" disabled">
                                              <span class="input-group-addon"> %</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Project Name</label>
                                                <input class="form-control" id="disabledInput" type="text" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Submit Date</label>
                                                <input class="form-control" id="disabledInput" type="text" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Quote Number</label>
                                                <input class="form-control" id="disabledInput" type="text" disabled>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
  </div>

</div>
</div>
@endsection