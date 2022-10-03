@extends('layouts.master')

@section('content') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Burial Permit Records</h1>
            <br>
            @if (Session::get('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
            @endif
            @if (Session::get('fail'))
            <div class="alert alert-danger">
              {{Session::get('fail')}}
            </div>
            @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Burial Permit Records</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
     
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Burial Permit Records</h3>
          <div class="col-sm-12 col-md-6">           
            <div class="dt-buttons btn-group flex-row ">  
            <a href="{{url('/admin/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
            <a href="#" class="btn btn-warning "><i class="fa fa-pencil-square-o"></i> Edit </a>
            <a href="#" class="btn btn-danger "><i class="fa fa-trash" ></i> Delete</a>
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <a href="{{ route('export') }}" class="btn btn-primary"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span> Excel</span></a>

            <a href="{{ route('export') }}" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i><span> Print</span></a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="records" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Reference Number</th>
              <th>Date</th>
              <th>Name</th>
              <th>City</th>
              <th>Province</th>
              <th>Name of Deceased</th>
              <th>Age</th>
              <th>Sex</th>
              <th>Nationality</th>
              <th>Date of Death</th>
              <th>Cause of Death</th>
              <th>Name of Cemetery</th>
              <th>Amount Paid</th>
              <th>Collecting Officer</th>
            </tr>
            </thead>
            <tbody>
              @foreach($records as $data)
              <tr>    
                <th>{{$data->RefNum}}</th>
                <th>{{$data->Date}}</th>
                <th>{{$data->Name}}</th>
                <th>{{$data->City}}</th>
                <th>{{$data->Province}}</th>      
                <th>{{$data->NameOfDeceased}}</th>
                <th>{{$data->Nationality}}</th>
                <th>{{$data->Age}}</th>
                <th>{{$data->Sex}}</th>
                <th>{{$data->DateOfDeath}}</th>     
                <th>{{$data->CauseOfDeath}}</th>
                <th>{{$data->NameOfCemetery}}</th>
                {{-- <th>{{$data->Infectious}}</th>
                <th>{{$data->Embalmed}}</th>          
                <th>{{$data->DispositionOfRemains}}</th> --}}
                <th>{{$data->Amount}}</th>
                <th>{{$data->CollectingOfficer}}</th>        
              </tr>
          @endforeach
            </tfoot>
          </table>
          <br>
        {{-- Pagination --}}
          {{ $records->links() }}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>

  <script>
    $(function () {
      $('records').DataTable({
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection