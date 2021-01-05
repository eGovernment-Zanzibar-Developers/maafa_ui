@extends('layout.app')
@section('title','Taasisi')

@section('content')

<div class="card">
    <div class="card-body">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-ministry-tab" data-toggle="pill" href="#pills-ministry" role="tab" aria-controls="pills-ministry" aria-selected="true"><i class="fa fa-university"></i> Wizara</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-building"></i> Aina ya Idara</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-vihara"></i> Idara</a>
        </li>
      </ul>
      <hr>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-ministry" role="tabpanel" aria-labelledby="pills-ministry-tab">
          <div class="row mb-2">
            <div class="col-md-12">

                <x-ministry-modal/>
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
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row mb-2">
            <div class="col-md-12">
              <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <select name="ministrydept" id="" class="form-control">
                            @foreach ($ministries as $ministry)
                              <option value="{{$ministry['id']}}">{{$ministry['name']}}</option>
                            @endforeach
                          </select>
                          @error('ministrydept')
                          <span class="text-danger">{{ $message }}</span> 
                          @enderror
                      </div>
                    </div>
                  <div class="col-md-4">
                      <div class="form-group">
                        <select name="deptType" id="inputdeptType" class="form-control" placeholder="Idara">
                          @foreach ($departmentTypes as $departmentType)
                            <option value="{{$departmentType['id']}}">{{$departmentType['name']}}</option>
                          @endforeach
                        </select>
                        @error('deptType')
                        <span class="text-danger">{{ $message }}</span> 
                        @enderror
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" class="form-control" name="department" placeholder="Idara"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                
                  <button type="submit" class="btn btn-success" Id="submitForm"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
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
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="row mb-2">
            <div class="col-md-4">
                <form action="" method="POST" id="departmentType">
                  @csrf
            
                <div class="form-group">
                    <label for="inputdepartmentType">Aina ya Idara</label>
                    <input type="text" name="departmentType" id="inputdepartmentType" class="form-control" placeholder="Aina ya Idara">
                    @error('departmentType')
                      <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              
                <div class="form-group">
                  <button type="submit" class="btn btn-success" Id="submitForm"><i class="fa fa-save"></i> Save</button>
                </div>
              </form>
            </div>
        </div>
      <table id="example1" class="table table-bordered table-striped table-sm">
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
        
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
 
@endsection