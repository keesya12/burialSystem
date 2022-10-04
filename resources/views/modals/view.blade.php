@foreach($records as $data)
<form action="" method="GET" enctype="multipart/form-data">
    <div class="modal fade" id="ModalView{{$data->RefNum}}">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">View Record with Reference # {{$data->RefNum}}</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label for="refNum">Reference Number</label>
            <input type="number" value="{{$data->RefNum}}" id="RefNum" name="RefNum" readonly maxlength="7" class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
          </div>
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="Date" name="Date" class="form-control"value="{{$data->Date}}" readonly>
          </div>
        <div class="form-group">
            <label for="payer">Name</label>
            <input type="text" id="Name" " name="Name" value="{{$data->Name}}" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="City">City</label>
              <input type="text" id="City"  name="City" value="{{$data->City}}" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="Province">Province</label>
              <input type="text" id="Province"  name="Province" value="{{$data->Province}}" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="nameOfdead">Name of Deceased</label>
              <input type="text" id="NameOfDeceased" name="NameOfDeceased" value="{{$data->NameOfDeceased}}" readonly  class="form-control">
            </div>
            <div class="form-group">
              <label for="nat">Nationality</label>
              <input type="text" id="Nationality" name="Nationality" value="{{$data->Nationality}}" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="number" id="Age" name="Age" value="{{$data->Age}}" readonly class="form-control"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </div>
            <div class="form-group">
              <label for="sex">Sex</label>
              <input type="text" id="Sex" name="Sex" value="{{$data->Sex}}" readonly class="form-control">
              </div>
            <div class="form-group">
              <label for="dateofdeath">Date of Death</label>
              <input type="text" id="DateOfDeath" name="DateOfDeath" value="{{$data->DateOfDeath}}" readonly class="form-control">
            </div>
            <div class="form-group">
              <label for="causeofdeath">Cause of Death</label>
              <input type="text" id="CauseOfDeath" name="CauseOfDeath" value="{{$data->CauseOfDeath}}" readonly class="form-control">
            </div>
            <div class="form-group">
            <label for="nameofcemetery">Name of Cemetery</label>
            <input type="text" id="NameOfCemetery" name="NameOfCemetery" value="{{$data->NameOfCemetery}}" readonly  class="form-control">
            </div>
            
            <br>
            <h2>In Case of Disinterment </h2>
            <br>
            <div class="form-group">
              <label for="Infect">Infectious/Non-Infectious</label>
              <input type="text" id="Infectious" name="Infectious" value="{{$data->Infectious}}" readonly  class="form-control">
            </div>
            <div class="form-group">
              <label for="Embalm">Body Embalmed/Not Embalmed</label>
              <input type="text" id="Embalmed" name="Embalmed" value="{{$data->Embalmed}}" readonly  class="form-control">
            </div>
            <div class="form-group">
              <label for="dispo">Dispostion of Remains</label>
              <input type="text" id="DispositionOfRemains" name="DispositionOfRemains" value="{{$data->DispositionOfRemains}}" readonly class="form-control">
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="Amount">Burial Fee</label>
                <input type="text" id="Amount" name="Amount" value="{{$data->Amount}}" readonly class="form-control">
              </div>
              <div class="form-group">
                <label for="colOfficer">Collecting Officer</label>
                <input type="text" id="Collecting_fficer" name="CollectingOfficer" value="{{$data->CollectingOfficer}}" readonly class="form-control">
              </div>
          </div>
    <div class="modal-footer float-right">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

    </div>
    </div>
    
    </div>
    
    </div>
</form>
@endforeach 