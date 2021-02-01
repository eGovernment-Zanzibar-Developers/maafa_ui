@extends('layout.app')
@section('title','Hazard List')
@section('content')
    <div class="card card-dark card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mb-2 text-right">
                        <div class="col-md-12">
                           <a href="/add-hazard" class="btn btn-success" ><i class="fa fa-plus-circle"></i> Add Hazard</a>
                        </div>
                    </div>
                    <table id="dataTable" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Source</th>
                                <th>Shehia</th>
                                <th>Reported Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hazards as $hazard)
                                <tr>
                                    <td>{{ $hazard['hazardTitle'] }}</td>
                                    <td>{{ $hazard['hazardTypeName'] }}</td>
                                    <td>{{ $hazard['hazardSourceName'] }}</td>
                                    <td>{{ $hazard['shehiaName'] }}</td>
                                    <td>{{ date('Y-m-d', strtotime($hazard['reportedDate'])) }}</td>
                                    <td>
                                        <a href="/edit-hazard/{{ encrypt($hazard['id'])}}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> | 
                                        <a href="/hazard-affected/{{ encrypt($hazard['id'])}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection