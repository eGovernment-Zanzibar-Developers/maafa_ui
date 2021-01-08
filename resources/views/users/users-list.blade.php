@extends('layout.app')
@section('title','Watumiaji')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mb-2 text-right">
            <div class="col-md-12">
                <button class="btn btn-info" data-toggle="modal" data-target="#user" aria-expanded="false" aria-controls="user">
                    <i class="fa fa-plus-circle"></i> Ongeza Mtumiaji
                </button>
            </div>
        </div>
      <table id="example1" class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
          <th>Nambari ya Uajiri </th>
          <th>Jina</th>
          <th>Barua pepe</th>
          <th>Idara</th>
          <th>Hali ya Mtumiaji</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user['employeeNumber']}}</td>
                <td>{{$user['title']}} {{$user['firstName']}} {{$user['lastName']}} </td>
                <td>{{$user['email']}}</td>
                <td>{{$user['departmentName']}}</td>
                <td>
                  @if($user['userStatusName'] == 'Active')
                    <span class="badge badge-success">Active</span>
                  @else
                    <span class="badge badge-danger">NotActive</span>
                  @endif
                </td>
                <td>
                    <i class="fa fa-edit"></i> |
                    <i class="fa fa-trash"></i> 
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
 <!-- Modal -->
 <div class="modal fade" id="user"  data-keyboard="false" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userLabel">Ongeza Mtumiaji</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addUser" action="" method="POST">
      <div class="modal-body">
              @csrf
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="firstName" id="inputfirstName" class="form-control" placeholder="Jina la Kwanza">
                    @error('firstName')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="middleName" id="inputmiddleName" class="form-control" placeholder="Jina la Pili">
                    @error('middleName')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="lastName" id="inputlastName" class="form-control" placeholder="Jina la Mwisho">
                    @error('lastName')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Cheo">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <input type="phone" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Nambari ya Simu">
                    @error('middleName')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <input type="email" name="email" id="inputemail" class="form-control" placeholder="Barua pepe">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="employeeNumber" id="inputEmployeeNumber" class="form-control" placeholder="Nambari ya Uajiri">
                    @error('middleName')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
            </div>
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="passportNumber" id="inputpassportNumber" class="form-control" placeholder="Nambari ya Pasipoti">
                    @error('passportNumber')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <select name="userType" id="inputUserType" class="form-control">
                      <option selected disable>..Chagua Aina ya Mtumiaji..</option>
                    </select>
                    @error('userType')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
            </div>
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                    <select name="ministry" id="inputMinistry" class="form-control">
                      <option selected disable>..Chagua Wizara..</option>
                      @foreach($ministries as $ministry)
                      <option value="">{{$ministry['name']}}</option>
                      @endforeach
                    </select>
                    @error('passportNumber')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <select name="department" id="inputdepartment" class="form-control">
                      <option selected disable>..Chagua Idara..</option>
                    </select>
                    @error('department')
                        <span class="text-danger">{{ $message }}</span> 
                    @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Funga</button>
            <button type="submit" class="btn btn-success" ><i class="fa fa-save"></i> Hifadhi</button>
          </div>
        </form>
    </div>
  </div>
</div>
 
@endsection