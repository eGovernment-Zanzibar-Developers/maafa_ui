@extends('layout.app')
@section('title','Wizara')

@section('content')

<div class="card">
  <div class="card-body">
    <x-ministry-modal/>
    {{-- @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif --}}
    <div class="row mb-2 text-right">
      <div class="col-md-12">
         <button class="btn btn-info" data-toggle="modal" data-target="#institute"><i class="fa fa-plus-circle"></i> Ongeza Wizara</button>
      </div>
  </div>
  <table id="example1" class="table table-bordered table-striped table-sm">
      <thead>
          <tr>
              <th>Wizara</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($ministries as $ministry)
              <tr>
                  <td>{{$ministry['name']}}</td>
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
      <div class="modal fade" id="institute" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="instituteLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="instituteLabel"> Ongeza Wizara</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="addinstitute" action="" method="POST">
            <div class="modal-body">
                    @csrf
                  <div class="row">
      
                    <div class="col-md-12">
        
                      <div class="form-group">
                          
                          <input type="text" name="ministry" id="inputMinistry" class="form-control" placeholder="Jina la Wizara">
                          @error('ministry')
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

@endsection