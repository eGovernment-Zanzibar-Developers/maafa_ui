            <form action="" method="POST" id="ministry">
            @csrf
       
          <div class="form-group">
              <label for="inputMinistry">Wizara</label>
              <select name="ministry" id="" class="form-control">
                @foreach ($ministries as $ministry)
                    <option>{{$ministry['name']}}</option>
                @endforeach
                  <option></option>
              </select>
              @error('ministry')
                 <span class="text-danger">{{ $message }}</span> 
              @enderror
          </div>
        
        <div class="form-group">
         
          <button type="submit" class="btn btn-success" Id="submitForm"><i class="fa fa-save"></i> Save</button>
        </div>
        </form>