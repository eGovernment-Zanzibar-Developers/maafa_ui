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
        <table id="dataTable" class="table table-bordered table-striped table-sm">
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
        <div class="modal-header bg-info">
          <h5 class="modal-title" id="InstituteLabel"><i class="fa fa-plus-circle"></i> Ongeza Idara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times-circle fa-danger"></i></span>
          </button>
        </div>
        <form id="addInstitute" action="" method="POST">
        <div class="modal-body">
                @csrf
              <div class="row mt-3">
  
                <div class="col-md-12">
    
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-university"></i>
                      </div>
                    </div>
                      <select name="ministryId" id="inputMinistry" class="custom-select">
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
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
    
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-building"></i>
                      </div>
                    </div>
                    <select name="departmentId" id="inputdepartmentName" class="custom-select">
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
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-building"></i>
                      </div>
                    </div>
                      <input type="text" name="department" id="inputDepartment" class="form-control" placeholder="Jina la Idara">
                      @error('department')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Funga</button>
              <button type="submit" class="btn btn-info" ><i class="fa fa-save"></i> Hifadhi</button>
              
            </div>
          </form>
      </div>
    </div>
  </div>
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>


@endsection