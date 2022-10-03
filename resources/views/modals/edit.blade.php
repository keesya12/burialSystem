@foreach($records as $data)
<form action="{{url('records.update',$data->RefNum)}}" method="POST" enctype="multipart/form-data">
 {{method_field('patch')}}
 {{ csrf_field() }} 
  <div class="modal fade" id="ModalEdit{{$data->RefNum}}">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Edit a Record</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label for="refNum">Reference Number</label>
        <input type="number" value="{{$data->RefNum}}" id="RefNum" name="RefNum" maxlength="7" class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="Date" name="Date" class="form-control"value="{{$data->Date}}">
      </div>
    <div class="form-group">
        <label for="payer">Name</label>
        <input type="text" id="Name" " name="Name" value="{{$data->Name}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="City">City</label>
          <input type="text" id="City"  name="City" value="{{$data->City}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="Province">Province</label>
          <input type="text" id="Province"  name="Province" value="{{$data->Province}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="nameOfdead">Name of Deceased</label>
          <input type="text" id="NameOfDeceased" name="NameOfDeceased" value="{{$data->NameOfDeceased}}"  class="form-control">
        </div>
        <div class="form-group">
          <label for="nat">Nationality</label>
          <input type="text" id="Nationality" name="Nationality" value="{{$data->Nationality}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" id="Age" name="Age" value="{{$data->Age}}" class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
        </div>
        <div class="form-group">
          <label for="sex">Sex</label>
          <input type="text" id="Sex" name="Sex" value="{{$data->Sex}}" class="form-control">
          </div>
        <div class="form-group">
          <label for="dateofdeath">Date of Death</label>
          <input type="text" id="DateOfDeath" name="DateOfDeath" value="{{$data->DateOfDeath}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="causeofdeath">Cause of Death</label>
          <input type="text" id="CauseOfDeath" name="CauseOfDeath" value="{{$data->CauseOfDeath}}" class="form-control">
        </div>
        <div class="form-group">
        <label for="nameofcemetery">Name of Cemetery</label>
        <input type="text" id="NameOfCemetery" name="NameOfCemetery" value="{{$data->NameOfCemetery}}"  class="form-control">
        </div>
        
        <br>
        <h2>In Case of Disinterment </h2>
        <br>
        <div class="form-group">
          <label for="Infect">Infectious/Non-Infectious</label>
          <input type="text" id="Infectious" name="Infectious" value="{{$data->Infectious}}"  class="form-control">
        </div>
        <div class="form-group">
          <label for="Embalm">Body Embalmed/Not Embalmed</label>
          <input type="text" id="Embalmed" name="Embalmed" value="{{$data->Embalmed}}"  class="form-control">
        </div>
        <div class="form-group">
          <label for="dispo">Dispostion of Remains</label>
          <input type="text" id="DispositionOfRemains" name="DispositionOfRemains" value="{{$data->DispositionOfRemains}}" class="form-control">
          </div>
          <br>
          <br>
          <div class="form-group">
            <label for="Amount">Burial Fee</label>
            <input type="text" id="Amount" name="Amount" value="{{$data->Amount}}" class="form-control">
          </div>
          <div class="form-group">
            <label for="colOfficer">Collecting Officer</label>
            <input type="text" id="Collecting_fficer" name="CollectingOfficer" value="{{$data->CollectingOfficer}}" class="form-control">
          </div>
      </div>
    <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    
    </div>
    
    </div>
</form>
@endforeach 