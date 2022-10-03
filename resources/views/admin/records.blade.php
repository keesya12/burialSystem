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
              <th>Reference No.</th>
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
                <th>{{$data->refNum}}</th>
                <th>{{$data->Date}}</th>
                <th>{{$data->payer}}</th>
                <th>{{$data->city}}</th>
                <th>{{$data->prov}}</th>      
                <th>{{$data->nameOfdead}}</th>
                <th>{{$data->nat}}</th>
                <th>{{$data->age}}</th>
                <th>{{$data->sex}}</th>
                <th>{{$data->dateofdeath}}</th>     
                <th>{{$data->causeofdeath}}</th>
                <th>{{$data->nameofcemetery}}</th>
                {{-- <th>{{$data->infect}}</th>
                <th>{{$data->embalm}}</th>          
                <th>{{$data->disposition}}</th> --}}
                <th>{{$data->amt}}</th>
                <th>{{$data->colOfficer}}</th>        
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