@extends('layout.app')
@section('title','Wizara')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mb-2">
            <div class="col">
                <button class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus-circle"></i> Ingiza Wizara
                </button>
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
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
<x-ministry-modal/>
 
@endsection