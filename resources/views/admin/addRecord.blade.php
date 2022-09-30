@extends('layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create A Record</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Create A Record</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row --><div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">{{ __('Burial Permit Details') }}</div>
                    <div class="card-body">
                  <form action="{{route('save')}}" method="POST"> 
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
                                <div class="card-body">
                                <div class="form-group">
                                <label for="payer">Name</label>
                                <input type="text" id="payer" placeholder="Enter Payer's Name"  name="payer" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="city">City</label>
                                  <input type="text" id="city" name="city" placeholder="Enter City"  class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="prov">Province</label>
                                  <input type="text" id="prov" name="prov" placeholder="Enter Province"  class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="nameOfdead">Name of Deceased</label>
                                  <input type="text" id="nameOfdead" name="nameOfdead" placeholder="Enter Name of Deceased" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="nat">Nationality</label>
                                  <input type="text" id="nat" name="nat" placeholder="Enter Nationality" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="age">Age</label>
                                  <input type="number" id="age" name="age" placeholder="Enter Age" maxlength="3" class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>
                                <div class="form-group">
                                  <label for="sex">Sex</label>
                                  <select name="sex"  class="form-control custom-select">
                                  <option selected="" disabled="">Select one</option>
                                  {{-- @foreach ($sex_choices as $choice )
                                      <option value="{{ $choice ->id }} {{$choice->sexChoice  ==$choice ->id ? 'selected':''}}" >{{ $choice ->sex }}</option>
                                  @endforeach --}}
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>                            
                                  </select>
                                  </div>
                                <div class="form-group">
                                  <label for="dateofdeath">Date of Death</label>
                                  <input type="date" id="dateofdeath" name="dateofdeath" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="causeofdeath">Cause of Death</label>
                                  <input type="text" id="causeofdeath" placeholder="Enter Cause of Death" name="causeofdeath" class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="nameofcemetery">Name of Cemetery</label>
                                <input type="text" id="nameofcemetery" name="nameofcemetery" placeholder="Enter Name of Cemetery" class="form-control">
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
                                <input type="number" id="refNum" name="refNum" placeholder="Enter Reference Number"  maxlength="7" class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                              </div>
                              <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date" class="form-control">
                              </div>
                              <br>
                              <h2>In Case of Disinterment </h2>
                              <br>
                              <div class="form-group">
                                <label for="infect">Infectious/Non-Infectious</label>
                                <select name="infect" id="infect" class="form-control custom-select">
                                <option selected="" disabled="">Select one</option>
                                {{-- @foreach ($infect_choices as $select )
                                    <option value="{{ $select ->id }}">{{ $select ->infect }}</option>
                                @endforeach --}}
                                <option value="Infectious">Infectious</option>
                                  <option value="Non-Infectious">Non-Infectious</option> 
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="embalm">Body Embalmed/Not Embalmed</label>
                                <select name="embalm" id="embalm" class="form-control custom-select">
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
                                <input type="text" id="disposition" name="disposition" placeholder="Enter Dispostion of Remains" class="form-control">
                                </div>
                                <br>
                                <br>

                                  <div class="form-group">
                                    <label for="amt">Burial Fee</label>
                                    <input type="text" id="amt" name="amt" value="10 " class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="colOfficer">Collecting Officer</label>
                                  <input type="text" id="colOfficer" name="colOfficer" placeholder="Enter Name of Collecting Officer" class="form-control">
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
                        </div>                            
                      </form>
</div>
</div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<br>



@endsection