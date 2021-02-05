<div class="modal fade" id="affPeople"  data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content ">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="userLabel"><i class="fa fa-user-plus"></i> Add Affected People</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times-circle fa-danger"></i></span>
        </button>
      </div>
      <form id="" action="" method="POST">
      <div class="modal-body">
              @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
                  <label for="inputfullName">Full Name</label>
                      <input type="text" name="fullName" id="inputfullName" class="form-control" placeholder="Full Name">
                      @error('fullName')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                      
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  
                  <label for="inputGender">Gender</label>
                  <select name="gender" class="form-control" id="inputGender">
                    <option selected disabled>..choose Gender..</option>
                    @foreach ($genders as $gender)
                    <option value="{{$gender['id']}}">{{$gender['name']}}</option>
                    @endforeach
                </select>
                      {{-- <input type="text" name="Gender" id="inputGender" class="form-control" placeholder="Gender">
                      @error('gender')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror --}}
                      
                 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
                  <label for="inputAgeRange">Age Range</label>
                  <select name="ageRange" class="form-control" id="inputAgeRange">
                    <option selected disabled>..select age range..</option>
                    @foreach ($ageRanges as $ageRange)
                    <option value="{{$ageRange['id']}}">{{$ageRange['name']}}</option>
                    @endforeach
                </select>
                      {{-- <input type="text" name="ageRange" id="inputAgeRange" class="form-control" placeholder="Age Range">
                      @error('ageRange')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror --}}
                      
                 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                 
                  <label for="inputResident">Resident</label>
                      <input type="text" name="Resident" id="inputResident" class="form-control" placeholder="Resident">
                      @error('resident')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                      
                 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
                  <label for="inputAddress">Address</label>
                      <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Address">
                      @error('address')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                      
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  
                  <label for="inputDescription">Descreptions</label>
                    <textarea name="description" class="form-control" id="inputDescription" placeholder="Descriptions" rows="3"></textarea>
                    @error('description')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                      
                  
                </div>
              </div>
            </div>
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-flat" ><i class="fa fa-save"></i> Save</button>
          </div>
        </form>
    </div>
  </div>
</div>
<div class="modal fade" id="affProperty"  data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content ">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="userLabel"><i class="fa fa-user-plus"></i> Add Affected Properties</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times-circle fa-danger"></i></span>
        </button>
      </div>
      <form id="addUser" action="" method="POST">
        <div class="modal-body">
          @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              
              <label for="inputPropertyType">Property Type</label>
                  <input type="text" name="PropertyType" id="inputPropertyType" class="form-control" placeholder="Property Type">
                  @error('propertyType')
                      <span class="text-danger">{{ $message }}</span> 
                  @enderror
                  
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              
              <label for="inputGender">Damage Type</label>
                  <input type="text" name="DamageType" id="inputDamageType" class="form-control" placeholder="Damage Type">
                  @error('damageType')
                      <span class="text-danger">{{ $message }}</span> 
                  @enderror
                  
             
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              
              <label for="inputMagnitude">Magnitude</label>
                  <input type="text" name="magnitude" id="inputMagnitude" class="form-control" placeholder="Magnitude">
                  @error('Magnitude')
                      <span class="text-danger">{{ $message }}</span> 
                  @enderror
                  
             
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
             
              <label for="inputEstimatedCost">Estimated Cost</label>
                  <input type="text" name="estimatedCost" id="inputEstimatedCost" class="form-control" placeholder="Estimated Cost">
                  @error('estimatedCost')
                      <span class="text-danger">{{ $message }}</span> 
                  @enderror
                  
             
            </div>
          </div>
        </div>

        {{-- <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              
              <label for="inputAddress">Address</label>
                  <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Address">
                  @error('address')
                      <span class="text-danger">{{ $message }}</span> 
                  @enderror
                  
              
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              
              <label for="inputDescription">Descreptions</label>
                <textarea name="description" class="form-control" id="inputDescription" placeholder="Descriptions" rows="3"></textarea>
                @error('description')
                      <span class="text-danger">{{ $message }}</span> 
                  @enderror
                  
              
            </div>
          </div>
        </div> --}}
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-flat" ><i class="fa fa-save"></i> Save</button>
      </div>
    </form>
</div>
  </div>
</div>