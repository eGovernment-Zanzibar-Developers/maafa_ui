<div class="modal fade" id="affPeople"  data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content ">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="userLabel"><i class="fa fa-user-plus"></i> Taarifa za Mtumiaji</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times-circle fa-danger"></i></span>
        </button>
      </div>
      <form id="" action="" method="POST">
      <div class="modal-body">
              @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                      <input type="text" name="firstName" id="inputfirstName" class="form-control" placeholder="Jina la Kwanza">
                      @error('firstName')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
            
            </div>
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Funga</button>
            <button type="submit" class="btn btn-info btn-flat" ><i class="fa fa-save"></i> Hifadhi</button>
          </div>
        </form>
    </div>
  </div>
</div>
<div class="modal fade" id="affProperty"  data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content ">
      <div class="modal-header bg-info">
        <h5 class="modal-title" id="userLabel"><i class="fa fa-user-plus"></i> Taarifa za Mtumiaji</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times-circle fa-danger"></i></span>
        </button>
      </div>
      <form id="addUser" action="" method="POST">
      <div class="modal-body">
              @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                      <input type="text" name="firstName" id="inputfirstName" class="form-control" placeholder="Jina la Kwanza">
                      @error('firstName')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
           
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Funga</button>
            <button type="submit" class="btn btn-info btn-flat" ><i class="fa fa-save"></i> Hifadhi</button>
          </div>
        </form>
    </div>
  </div>
</div>