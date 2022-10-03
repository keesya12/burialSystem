@extends('layouts.master')

@section('content') 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
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
              <li class="breadcrumb-item active">Users</li>
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
          {{-- <div class="col-sm-12 col-md-6">           
            <div class="dt-buttons btn-group flex-row ">  
            <a href="{{url('/admin/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
            <a href="#" class="btn btn-warning "><i class="fa fa-pencil-square-o"></i> Edit </a>
            <a href="#" class="btn btn-danger "><i class="fa fa-trash" ></i> Delete</a>
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            <a href="{{ route('export') }}" class="btn btn-primary"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span> Excel</span></a>

            <a href="{{ route('export') }}" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i><span> Print</span></a>
            </div>
        </div> --}}
        <!-- /.card-header -->
        <div class="card-body">
          <table id="records" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Email/Username</th>
              <th>Created_at</th>
            </tr>
            </thead>
            <tbody>
              @foreach($users as $data)
              <tr>    
                <th>{{$data->name}}</th>
                <th>{{$data->email}}</th>
                <th>{{$data->created_at}}</th>
          @endforeach
            </tfoot>
          </table>
          <br>
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