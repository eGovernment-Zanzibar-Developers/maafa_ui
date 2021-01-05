
  
          
          <form action="" method="POST" id="ministry">
              @csrf
            <div class="row">

              <div class="col-md-6">
  
                <div class="form-group">
                    
                    <input type="text" name="ministry" id="inputMinistry" class="form-control" placeholder="Jina la Wizara">
                    @error('ministry')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <button type="submit" class="btn btn-success" Id="submitForm"><i class="fa fa-save"></i> Save</button>
                </div>
              </div>
            </div>
          </form>

      
  
