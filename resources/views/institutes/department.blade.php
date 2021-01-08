@extends('layout.app')
@section('title', 'Idara')

@section('content')
    <div class="card">
        <div class="card-body">
            <x-ministry-modal/>
          <div class="row mb-2 text-right">
            <div class="col-md-12">
               <button class="btn btn-info" data-toggle="modal" data-target="#institute"><i class="fa fa-plus-circle"></i> Ongeza Idara</button>
            </div>
        </div>
        <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Idara</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{$department['departmentName']}}</td>
                        <td>
                            <i class="fa fa-edit"></i> |
                            <i class="fa fa-trash"></i> 
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        </div>
        
    </div>
    <!-- /.card-body -->
   <!-- Modal -->
   <div class="modal fade" id="institute" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="departmentLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="InstituteLabel">Ongeza Idara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="addInstitute" action="" method="POST">
        <div class="modal-body">
                @csrf
              <div class="row">
  
                <div class="col-md-12">
    
                  <div class="form-group">
                      
                      <select name="ministryId" id="inputMinistry" class="form-control">
                          <option selected disabled>..Chagua jina la Wizara..</option>
                          @foreach ($ministries as $ministry)
                              <option value="{{$ministry['id']}}">{{$ministry['name']}}</option>
                          @endforeach
                      </select>
                      @error('ministryId')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
                <div class="col-md-12">
    
                  <div class="form-group">
                    <select name="departmentId" id="inputdepartmentName" class="form-control">
                        <option selected disabled>..Chagua Aina ya Idara..</option>
                        @foreach ($departmentTypes as $departmentType)
                            <option value="{{$departmentType['id']}}">{{$departmentType['name']}}</option>
                        @endforeach
                    </select>
                      @error('departmentId')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
                <div class="col-md-12">
    
                  <div class="form-group">
                      
                      <input type="text" name="department" id="inputDepartment" class="form-control" placeholder="Jina la Idara">
                      @error('department')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
                
              </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" ><i class="fa fa-save"></i> Save</button>
              
            </div>
          </form>
      </div>
    </div>
  </div>
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>


@endsection