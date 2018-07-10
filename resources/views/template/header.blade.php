 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('/') }}">Sales | Sinergy Informasi Pratama</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        @if(Auth::User()->id_position == 'DIRECTOR')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{url('/project')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Sales</span>
          </a>
        </li>
        @elseif(Auth::User()->id_position == 'MANAGER' && Auth::User()->id_division == 'SALES')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{url('/project')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Sales</span>
          </a>
        </li>
        @elseif(Auth::User()->id_position == 'STAFF' && Auth::User()->id_division == 'SALES')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="{{url('/project')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Sales</span>
          </a>
        </li>
        @endif
        @if(Auth::User()->id_position == 'DIRECTOR')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/project')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Presales</span>
          </a>
        </li>
        @elseif(Auth::User()->id_position == 'MANAGER' && Auth::User()->id_division == 'TECHNICAL PRESALES')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/project')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Presales</span>
          </a>
        </li>
        @elseif(Auth::User()->id_position == 'STAFF' && Auth::User()->id_division == 'TECHNICAL PRESALES')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/project')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Presales</span>
          </a>
        </li>
        @endif
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/sho')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Sales Handover</span>
          </a>
        </li> -->
        @if(Auth::User()->id_position == 'HR')
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/hu_rec')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Human Resource</span>
          </a>
        </li>
        @elseif(Auth::User()->id_position == 'DIRECTOR')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/hu_rec')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Human Resource</span>
          </a>
        </li>
        @endif
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="{{url('/customer')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Customer Data</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
              <!-- <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li> -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
      </ul>
    </div>
  </nav>