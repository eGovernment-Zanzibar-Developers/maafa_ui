@extends('layout.app')
@section('title', 'Aina za Idara')

@section('content')
<div class="card">
    <div class="card-body">
        <x-ministry-modal/>
      <div class="row mb-2 text-right">
        <div class="col-md-12">
           <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#institute"><i class="fa fa-plus-circle"></i> Ongeza aina ya Idara</button>
        </div>
    </div>
    <table id="dataTable" class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>Aina ya Idara</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departmentTypes as $departmentType)
                <tr>
                    <td>{{$departmentType['name']}}</td>
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
</div>

  <!-- Modal -->
  <div class="modal fade" id="institute" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="instituteTypeLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title" id="instituteTypeLabel">Ongeza aina ya Idara</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-times-circle fa-danger"></i></span>
          </button>
        </div>
        <form id="addInstitute" action="" method="POST">
        <div class="modal-body">
                @csrf
              <div class="row">
  
                <div class="col-md-12">
    
                  <div class="form-group">
                      
                      <input type="text" name="departmentType" id="inputDepartmentType" class="form-control" placeholder="Aina ya Idara">
                      @error('departmentType')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
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
  
@endsection