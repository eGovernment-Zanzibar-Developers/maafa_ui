@extends('layout.app')
@section('title','Watumiaji')

@section('content')
<div class="card">
    <div class="card-body">
      
        <div class="row mb-2">
            <div class="col-md-6">
                <button class="btn btn-info" data-toggle="collapse" data-target="#addMinistry" aria-expanded="false" aria-controls="addMinisty">
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

 
@endsection