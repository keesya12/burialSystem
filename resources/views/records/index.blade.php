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

            @if (Session::get('status'))
            <div class="alert alert-success alert-dismissible">
              {{Session::get('status')}} 
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
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
    <div class="col-sm-12 col-md-5">   
      <div class="dt-buttons btn-group"> 
      <a href="{{url('/admin/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
      <a href="#" data-toggle="modal" data-target="#ModalDelete" class="btn btn-danger "><i class="fa fa-trash" ></i> Delete</a>
      <a href="{{ route('export') }}" class="btn btn-primary"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span> Excel</span></a>
      <button class="btn btn-primary" onclick="myFunction()"><i class="fa fa-print" aria-hidden="true" onclick="myFunction()"></i>Print</button>
      </div>
  </div>
  <br>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Burial Permit Records</h3>
          <br>
          
        <!-- /.card-header -->
        <div class="card-body">
          <table id="records" class="table table-hover table-aligned-middle" style="width:100%">
            <thead class="table-primary ">
            <tr>
              <th scope="col">@sortablelink('RefNum','Reference Number') 
                <span class="float-right text-sm" style="cursor: pointer">
              <i class="fa fa-arrow-up"></i>
              <i class="fa fa-arrow-down text-muted"></i>
                </span>
            </th>
              <th scope="col">Date</th>
              <th scope="col">Name</th>
              <th scope="col">City</th>
              <th scope="col">Province</th>
              <th scope="col">Name of Deceased</th>
              {{-- <th scope="col">Nationality</th> --}}
              <th scope="col">Age</th>
              <th scope="col">Sex</th>
              <th scope="col">Date of Death</th>
              <th scope="col">Cause of Death</th>
              <th scope="col">Name of Cemetery</th>
              <th scope="col">Collecting Officer</th>
              <th scope="col">Actions </th>
            </tr>
            </thead>
            <tbody>
              @if ($records->count())
              @foreach($records as $data)
              <tr>    
                <th>{{$data->RefNum}}</th>
                <th>{{$data->Date}}</th>
                <th>{{$data->Name}}</th>
                <th>{{$data->City}}</th>
                <th>{{$data->Province}}</th>      
                <th>{{$data->NameOfDeceased}}</th>
                {{-- <th>{{$data->Nationality}}</th> --}}
                <th>{{$data->Age}}</th>
                <th>{{$data->Sex}}</th>
                <th>{{$data->DateOfDeath}}</th>     
                <th>{{$data->CauseOfDeath}}</th>
                <th>{{$data->NameOfCemetery}}</th>
                {{-- <th>{{$data->Infectious}}</th>
                <th>{{$data->Embalmed}}</th>          
                <th>{{$data->DispositionOfRemains}}</th> --}}
                <th>{{$data->CollectingOfficer}}</th>
                <th>
                  <a href="#"data-toggle="modal" data-target="#ModalView{{$data->RefNum}}" ><i class="fa fa-eye" aria-hidden="true"></i></a>  
                  {{-- <a href="#" data-toggle="modal" data-target="#ModalView{{$data->RefNum}} class="btn btn-default"><i class="fa fa-eye" aria-hidden="true"></i></a>   --}}
                </th>        
              </tr>
          @endforeach
              @endif
            </tfoot>
          </table>
          {!! $records->render()!!}
          {{-- <div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div> --}}
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
{{-- @include("modals.delete") --}}
@include("modals.view")
{{-- @include("modals.edit") --}}
  <script>
  $(document).ready( function () {
    $('#records').DataTable({
      order: [[3, 'desc']],
    });
} );
  </script>


@endsection