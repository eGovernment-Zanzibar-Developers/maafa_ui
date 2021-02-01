@extends('layout.app')
@section('title','Hazard Type')
@section('content')
<div class="card card-dark card-outline">
    <x-nav-menu/>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 pt-4">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputType">Add New Hazard Type</label>
                        <input type="text" name="type" class="form-control" id='inputType' placeholder="Type">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table id="dataTable" class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hazardTypes as $hazardType)
                            <tr>
                                <td>{{ $hazardType['name'] }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection