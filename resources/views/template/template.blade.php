<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-slider.css')}}">
  
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    @show
    @section('header')
    @include('template.header')
    @show
  <!--content-->
    <div class="">
        @yield('content')
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure want to logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    
    <script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-slider.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('js/sb-admin-datatables.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-charts.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-slider.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <script src="{{asset('js/ajaxscript.js')}}"></script>
    <script type="" src="{{asset('js/jquery.samask-masker.js')}}"></script>
    <script src="{{asset('js/sb-admin-charts.min.js')}}"></script>
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
     
  </div>
</body>
</html>