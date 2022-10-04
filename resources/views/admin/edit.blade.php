@extends('layouts.master')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit A Record</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/records')}}">Records</a></li>
              <li class="breadcrumb-item active">Edit A Record</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row --><div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-header">{{ __('Burial Permit Details') }}</div>
                      <div class="card-body">
                    <form action="#" method="POST"> 
                        @method('PATCH')
                      @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Person's Info </h3>
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                                  </button>
                                  </div>
                                  </div>
                                  {{-- @foreach($records as $data) --}}
                                  <div class="card-body">
                                  <div class="form-group">
                                  <label for="payer">Name</label>
                                  <input type="text" id="Name" placeholder="Enter Name"  name="Name" readonly  class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="City">City</label>
                                    <select name="City" id="City" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    {{-- @foreach ($infect_choices as $select )
                                        <option value="{{ $select ->id }}">{{ $select ->infect }}</option>
                                    @endforeach --}}
                                    <option value="Cagayan de Oro City">Cagayan de Oro City</option>
                                      {{--  Input more cities here --}}
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="Province">Province</label>
                                    <select name="Province" id="Province" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    {{-- @foreach ($infect_choices as $select )
                                        <option value="{{ $select ->id }}">{{ $select ->infect }}</option>
                                    @endforeach --}}
                                    <option value="Misamis Oriental">Misamis Oriental</option>
                                      {{--  Input more cities here --}}
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="nameOfdead">Name of Deceased</label>
                                    <input type="text" id="NameOfDeceased" name="NameOfDeceased" required="" placeholder="Enter Name of Deceased" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="nat">Nationality</label>
                                    <input type="text" id="Nationality" name="Nationality" placeholder="Enter Nationality" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" id="Age" name="Age" placeholder="Enter Age" maxlength="3" class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                  </div>
                                  <div class="form-group">
                                    <label for="sex">Sex</label>
                                    <select name="Sex"  class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    {{-- @foreach ($sex_choices as $choice )
                                        <option value="{{ $choice ->id }} {{$choice->sexChoice  ==$choice ->id ? 'selected':''}}" >{{ $choice ->sex }}</option>
                                    @endforeach --}}
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>                            
                                    </select>
                                    </div>
                                  <div class="form-group">
                                    <label for="dateofdeath">Date of Death</label>
                                    <input type="date" id="DateOfDeath" name="DateOfDeath" class="form-control">
                                  </div>
                                  <div class="form-group">
                                    <label for="causeofdeath">Cause of Death</label>
                                    <input type="text" id="CauseOfDeath" placeholder="Enter Cause of Death" name="CauseOfDeath" class="form-control">
                                  </div>
                                  <div class="form-group">
                                  <label for="nameofcemetery">Name of Cemetery</label>
                                  <input type="text" id="NameOfCemetery" name="NameOfCemetery" placeholder="Enter Name of Cemetery" class="form-control">
                                  </div>
                                </div>  
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card card-warning">
                              <div class="card-header">
                              <h3 class="card-title">Permit Info</h3>
                              <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                              </button>
                              </div>
                              </div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="refNum">Reference Number</label>
                                  <input type="number" id="RefNum" name="RefNum" placeholder="Enter Reference Number"  required="" maxlength="7" class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>
                                <div class="form-group">
                                  <label for="date">Date</label>
                                  <input type="date" id="Date" name="Date" class="form-control">
                                </div>
                                <br>
                                <h2>In Case of Disinterment </h2>
                                <br>
                                <div class="form-group">
                                  <label for="Infect">Infectious/Non-Infectious</label>
                                  <select name="Infectious" id="Infectious" class="form-control custom-select">
                                  <option selected="" disabled="">Select one</option>
                                  {{-- @foreach ($infect_choices as $select )
                                      <option value="{{ $select ->id }}">{{ $select ->infect }}</option>
                                  @endforeach --}}
                                  <option value="Infectious">Infectious</option>
                                    <option value="Non-Infectious">Non-Infectious</option> 
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="Embalm">Body Embalmed/Not Embalmed</label>
                                  <select name="Embalmed" id="Embalmed" class="form-control custom-select">
                                  <option selected="" disabled="">Select one</option>
                                  {{-- @foreach ($embalm_choices as $selection )
                                      <option value="{{ $selection ->id }}">{{ $selection ->embalm }}</option>
                                  @endforeach --}}
                                  <option value="Body Embalmed">Body Embalmed</option>
                                  <option value="Not Embalmed">Not Embalmed</option> 
                                  <option value="For Injection Only">For Injection Only</option> 
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="dispo">Dispostion of Remains</label>
                                  <input type="text" id="DispositionOfRemains" name="DispositionOfRemains" placeholder="Enter Dispostion of Remains" class="form-control">
                                  </div>
                                  <br>
                                  <br>
  
                                    <div class="form-group">
                                      <label for="amt">Burial Fee</label>
                                      <input type="text" id="Amount" name="Amount" value="10 " class="form-control" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label for="colOfficer">Collecting Officer</label>
                                    <input type="text" id="Collecting_fficer" name="CollectingOfficer" placeholder="Enter Name of Collecting Officer" class="form-control">
                                  </div>
                                </div>
                              </div>  
                            </div>
                            <div class="row">
                              <div class="col-12">
                              <a href="#" class="btn btn-secondary">Cancel</a>
                              <input type="submit" value="Submit" class="btn btn-success float-right">
                              </div>
                              </div>
                              {{-- @endforeach --}}
                          </div>                            
                        </form>
  </div>
  </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <br>
  


@endsection