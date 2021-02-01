@extends('layout.app')
@section('title','Users List')

@section('content')
<div class="card card-dark card-outline">
    <div class="card-body ">
        <div class="row mb-2 text-right">
            <div class="col-md-12">
                <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#user" aria-expanded="false" aria-controls="user">
                    <i class="fa fa-user-plus"></i> Add User
                </button>
            </div>
        </div>
      <table id="dataTable" class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
          <th>Full Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>User Type</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user['firstName']}} {{$user['lastName']}} </td>
              <td>{{$user['phone']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['userTypeName']}}</td>
                <td>
                  @if($user['userStatusName'] == 'ACTIVE')
                    <span class="badge badge-success">Active</span>
                  @else
                    <span class="badge badge-danger">InActive</span>
                  @endif
                </td>
                <td>
                    <a href="" class="" data-toggle="modal" data-target="#editUser{{$user['id']}}"><i class="fa fa-edit"></i></a> |
                    <i class="fa fa-eye"></i> 
                    
                  </td>
                </tr>
                <!-- editModal -->
                {{-- <div class="modal fade" id="editUser{{$user['id']}}" >
                 <div class="modal-dialog modal-lg ">
                   <div class="modal-content ">
                     <div class="modal-header bg-info">
                       <h5 class="modal-title" id="userLabel"><i class="fa fa-retweet"></i> Boresha Taarifa za Mtumiaji</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true"><i class="fa fa-times-circle fa-danger"></i></span>
                       </button>
                     </div>
                     <form id="editUser" action="" method="POST">
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
                                     <input type="text" name="firstName" id="inputfirstName" class="form-control" placeholder="Jina la Kwanza" value="{{$user['firstName']}}">
                                     @error('firstName')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-4">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-user"></i>
                                     </div>
                                   </div>
                                     <input type="text" name="middleName" id="inputmiddleName" class="form-control" placeholder="Jina la Pili" value="{{$user['middleName']}}">
                                     @error('middleName')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-4">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-user"></i>
                                     </div>
                                   </div>
                                     <input type="text" name="lastName" id="inputlastName" class="form-control" placeholder="Jina la Mwisho" value="{{$user['lastName']}}">
                                     @error('lastName')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-md-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-certificate"></i>
                                     </div>
                                   </div>
                                     <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Cheo" value="{{$user['title']}}">
                                     @error('title')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-mobile"></i>
                                     </div>
                                   </div>
                                     <input type="phone" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Nambari ya Simu" value="{{$user['phoneNumber']}}">
                                     @error('middleName')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-md-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-envelope"></i>
                                     </div>
                                   </div>
                                     <input type="email" name="email" id="inputemail" class="form-control" placeholder="Barua pepe" value="{{$user['email']}}">
                                     @error('email')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-hashtag"></i>
                                     </div>
                                   </div>
                                     <input type="text" name="employeeNumber" id="inputEmployeeNumber" class="form-control" placeholder="Nambari ya Uajiri" value="{{$user['employeeNumber']}}">
                                     @error('employeeNumber')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="row">
                           
                             <div class="col-md-6">
                               <div class="from-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-address-card"></i>
                                     </div>
                                   </div>
                                     <input type="text" name="passportNumber" id="inputpassportNumber" class="form-control" placeholder="Nambari ya Pasipoti" value="{{$user['passportNumber']}}">
                                     @error('passportNumber')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-user-circle"></i>
                                     </div>
                                   </div>
                                     <select name="userType" id="inputUserType" class="custom-select">
                                       <option selected disable>{{$user['userTypeName']}}</option>
                                       @foreach ($userTypes as $userType)
                                       <option value="{{$userType['id']}}">{{$userType['name']}}</option>  
                                       @endforeach
                                     </select>
                                     @error('userType')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-md-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-university"></i>
                                     </div>
                                   </div>
                                     <select id="inputMinistry" class="custom-select ">
                                       <option selected disable>..Chagua Wizara..</option>
                                       @foreach($ministries as $ministry)
                                       <option value="{{$ministry['id']}}">{{$ministry['name']}}</option>
                                       @endforeach
                                     </select>
                                     @error('passportNumber')
                                         <span class="text-danger">{{ $message }}</span> 
                                     @enderror
                                 </div>
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group">
                                 <div class="input-group">
                                   <div class="input-group-prepend">
                                     <div class="input-group-text">
                                       <i class="fa fa-building"></i>
                                     </div>
                                   </div>
                                     <select name="department" id="inputdepartment" class="custom-select">
                                       <option selected disable>{{$user['departmentName']}}</option>
                                     </select>
                                     @error('department')
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
               </div> --}}
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
 <!-- createModal -->
 {{-- <div class="modal fade" id="user"  data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="userLabel" aria-hidden="true">
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
              <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                      <input type="text" name="middleName" id="inputmiddleName" class="form-control" placeholder="Jina la Pili">
                      @error('middleName')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                      <input type="text" name="lastName" id="inputlastName" class="form-control" placeholder="Jina la Mwisho">
                      @error('lastName')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-certificate"></i>
                      </div>
                    </div>
                      <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Cheo">
                      @error('title')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-mobile"></i>
                      </div>
                    </div>
                      <input type="phone" name="phoneNumber"  id="phoneNumber" class="form-control" placeholder="Nambari ya Simu">
                      @error('middleName')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-envelope"></i>
                      </div>
                    </div>
                      <input type="email" name="email" id="inputemail" class="form-control" placeholder="Barua pepe">
                      @error('email')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-hashtag"></i>
                      </div>
                    </div>
                      <input type="text" name="employeeNumber" id="inputEmployeeNumber" class="form-control" placeholder="Nambari ya Uajiri">
                      @error('middleName')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            
              <div class="col-md-6">
                <div class="from-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                      </div>
                    </div>
                      <input type="text" name="passportNumber" id="inputpassportNumber" class="form-control" placeholder="Nambari ya Pasipoti">
                      @error('passportNumber')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-user-circle"></i>
                      </div>
                    </div>
                      <select name="userType" id="inputUserType" class="custom-select">
                        <option selected disable>..Chagua Aina ya Mtumiaji..</option>
                        @foreach ($userTypes as $userType)
                        <option value="{{$userType['id']}}">{{$userType['name']}}</option>  
                        @endforeach
                      </select>
                      @error('userType')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-university"></i>
                      </div>
                    </div>
                      <select id="inputMinistry" class="custom-select ">
                        <option selected disable>..Chagua Wizara..</option>
                        @foreach($ministries as $ministry)
                        <option value="{{$ministry['id']}}">{{$ministry['name']}}</option>
                        @endforeach
                      </select>
                      @error('passportNumber')
                          <span class="text-danger">{{ $message }}</span> 
                      @enderror
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-building"></i>
                      </div>
                    </div>
                      <select name="department" id="inputdepartment" class="custom-select">
                        <option selected disable>..Chagua Idara..</option>
                      </select>
                      @error('department')
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
</div> --}}



@endsection