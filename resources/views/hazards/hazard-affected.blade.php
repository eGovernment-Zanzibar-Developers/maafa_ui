@extends('layout.app')
@section('title', 'Affected People, Property and Shehia')
@section('content')

    <div class="card card-dark card-outline">
       <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Affected People </span>
                  <span class="info-box-number">
                    {{$peoples}}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-map"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Affected Shehia</span>
                  <span class="info-box-number"></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div> 
            <!-- /.col -->
    
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
    
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-university"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Affected Property</span>
                  <span class="info-box-number">{{$properties}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
        </div>
           <div class="row">
                    <div class="col p-3">
                        <strong>Hazard Type:</strong> {{ $hazard['hazardTypeName'] }}<br/>
                        <strong>Hazard Source:</strong> {{ $hazard['hazardSourceName'] }}<br/>
                        <strong>Hazard Category:</strong> {{ $hazard['hazardCategoryName'] }}<br/>
                        <strong>Title:</strong> {{ $hazard['hazardTitle'] }}
                    </div>
                    <div class="col p-3">
                        <strong>Reporter Type:</strong> {{ $hazard['reporterTypeName'] }}<br>
                        <strong>Reporter Name:</strong> {{ $hazard['reporter'] }}<br>
                        <strong>Shehia:</strong> {{ $hazard['shehiaName'] }}<br>
                        <strong>Place:</strong> {{ $hazard['place'] }}<br>
                    </div>
                    <div class="col p-3">
                      <strong>Reported Date:</strong> {{ date('d/m/Y', strtotime($hazard['reportedDate'])) }}<br/>
                      <strong>Start Date:</strong> {{ date('d/m/Y', strtotime($hazard['startDate'])) }}<br/>
                      <strong>Status:</strong> {{ $hazard['hazardStatusName'] }}<br/>
                      
                    </div>
            </div>
            <hr> 
           <div class="row ">
                    <div class="col">
                        <td><strong>Description:</strong> {{ $hazard['description'] }}</td>
                      
                    </div>
            </div> 
           <div class="row pt-3">
               <div class="col-md-6">
                <button class="btn btn-flat btn btn-outline-success" data-toggle="modal" data-target="#affPeople"><i class="fa fa-plus"></i> Add Affected People</button>
                 <table id="example2" class="table table-bordered table-striped table-sm mt-3">
                   <thead>
                     <tr>
                       <th>Full Name</th>
                       <th>Gender</th>
                       <th>Resident</th>
                       <th>Address</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($affPeoples as $affPeople)
                         <tr>
                           <td>{{$affPeople['fullName']}}</td>
                           <td>
                             @if($affPeople['genderName'] == 'Male')
                              <i class="fa fa-male"></i>
                             @else
                             <i class="fa fa-female"></i>
                             @endif
                            </td>
                           <td>{{$affPeople['residentName']}}</td>
                           <td>{{$affPeople['address']}}</td>
                         </tr>
                     @endforeach
                   </tbody>
                 </table>
               </div>
               <div class="col-md-6">
                 <button class="btn btn-flat btn btn-outline-success" data-toggle="modal" data-target="#affProperty"><i class="fa fa-plus"></i> Add Affected Property</button>
                <table class="table table-striped table-sm mt-3">
                  <tr>
                    <th>Property Type</th>
                    <th>Damage Type</th>
                    <th>Magnitude</th>
                    <th>Estimated Cost</th>
                  </tr>
                  @foreach($affProperties as $affProperty)
                       <tr>
                         <td>{{$affProperty['propertyTypeName']}}</td>
                         <td>{{$affProperty['damageTypeName']}}</td>
                         <td>{{$affProperty['magnitudeName']}}</td>
                         <td>{{$affProperty['estimatedCost']}}</td>
                       </tr>
                   @endforeach
                </table>
               </div>
            </div> 
           </div>
    </div>
  <x-affected/>
@endsection