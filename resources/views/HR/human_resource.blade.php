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

      @if(Auth::User()->id_position == 'HR')
      <div class="row">
    		<div class="col-md-12">
    			<button class="btn btn-primary margin-bottom float-left" id="btnAdd">Add</button>
    		</div>
      </div>
      @endif

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Employee Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Employees Name</th>
                  <th>Company</th>
                  <th>Position</th>
                  <th>Division</th>
                  <th>Territory</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($hr as $data)
                <tr>
                  <td>{{ $data->nik }}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->code_company }}</td>
                  <td>{{ $data->id_position }}</td>
                  <td>{{ $data->id_division }}</td>
                  <td>{{ $data->id_territory }}</td>
                  <td>
                    <button class="btn btn-sm btn-danger fa fa-trash fa-lg" style="width: 40px;height: 40px"></button>
                    <button class="btn btn-sm btn-primary fa fa-search-plus fa-lg" style="width: 40px;height: 40px"></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

  </div>
</div>
@endsection

<div class="modal fade" id="modalAdd" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Add Employees</h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{url('hu_rec/store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" readonly required autofocus>

                                @if ($errors->has('nik'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Employees Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <select id="company" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" onkeyup="copytextbox();" required autofocus>
                                    <option value="">-- Select Company --</option>
                                    @foreach($company as $data)
                                    <option value="{{$data->id_company}}">{{$data->code_company}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('company'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="division" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>

                            <div class="col-md-6">
                                <select id="division" class="form-control{{ $errors->has('division') ? ' is-invalid' : '' }}" name="division" value="{{ old('division') }}" autofocus>
                                    <option value="">-- Select division --</option>
                                    @foreach($division as $data)
                                    <option value="{{$data->id_division}}">{{$data->name_division}} {{$data->name_sub_division}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('division'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <select id="position" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" autofocus>
                                    <option value="">-- Select position --</option>
                                    @foreach($position as $data)
                                    <option value="{{$data->id_position}}">{{$data->name_position}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('position'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="territory" class="col-md-4 col-form-label text-md-right">{{ __('Territory') }}</label>

                            <div class="col-md-6">
                                <select id="territory" class="form-control{{ $errors->has('territory') ? ' is-invalid' : '' }}" name="territory" value="{{ old('territory') }}" autofocus>
                                    <option value="">-- Select territory --</option>
                                    @foreach($territory as $data)
                                    <option value="{{$data->id_territory}}">{{$data->name_territory}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('territory'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('territory') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_entry" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Entry') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_entry" type="date" class="form-control{{ $errors->has('date_of_entry') ? ' is-invalid' : '' }}" name="date_of_entry" value="{{ old('date_of_entry') }}" onkeyup="copytextbox();" required autofocus>

                                @if ($errors->has('date_of_entry'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date_of_entry') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" onkeyup="copytextbox();" required autofocus>

                                @if ($errors->has('date_of_birth'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" autofocus></textarea>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                  </button>
                </div>
          </form>
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
          <form method="" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" readonly required autofocus>

                                @if ($errors->has('nik'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Employees Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <select id="company" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{ old('company') }}" onkeyup="copytextbox();" required autofocus>
                                    <option value="">-- Select Company --</option>
                                    @foreach($company as $data)
                                    <option value="{{$data->id_company}}">{{$data->code_company}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('company'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="division" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>

                            <div class="col-md-6">
                                <select id="division" class="form-control{{ $errors->has('division') ? ' is-invalid' : '' }}" name="division" value="{{ old('division') }}" autofocus>
                                    <option value="">-- Select division --</option>
                                    @foreach($division as $data)
                                    <option value="{{$data->id_division}}">{{$data->name_division}} {{$data->name_sub_division}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('division'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <select id="position" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" autofocus>
                                    <option value="">-- Select position --</option>
                                    @foreach($position as $data)
                                    <option value="{{$data->id_position}}">{{$data->name_position}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('position'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="territory" class="col-md-4 col-form-label text-md-right">{{ __('Territory') }}</label>

                            <div class="col-md-6">
                                <select id="territory" class="form-control{{ $errors->has('territory') ? ' is-invalid' : '' }}" name="territory" value="{{ old('territory') }}" autofocus>
                                    <option value="">-- Select territory --</option>
                                    @foreach($territory as $data)
                                    <option value="{{$data->id_territory}}">{{$data->name_territory}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('territory'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('territory') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_entry" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Entry') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_entry" type="date" class="form-control{{ $errors->has('date_of_entry') ? ' is-invalid' : '' }}" name="date_of_entry" value="{{ old('date_of_entry') }}" onkeyup="copytextbox();" required autofocus>

                                @if ($errors->has('date_of_entry'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date_of_entry') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" onkeyup="copytextbox();" required autofocus>

                                @if ($errors->has('date_of_birth'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" autofocus></textarea>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">
                      {{ __('Update') }}
                  </button>
                </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>

  <script type="text/javascript">
    function copytextbox(){
      var date_of_entry = document.getElementById('date_of_entry').value;
      var date_of_birth = document.getElementById('date_of_birth').value;

      document.getElementById('nik').value = document.getElementById('company').value + date_of_entry.substr(2, 2) + date_of_entry.substr(5, 2) + date_of_birth.substr(2, 2) + date_of_birth.substr(5, 2);
    }

  </script>