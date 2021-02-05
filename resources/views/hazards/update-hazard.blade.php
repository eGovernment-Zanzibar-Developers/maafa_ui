@extends('layout.app')
@section('title','Update Hazard')
@section('content')
    <div class="card card-dark card-outline">
        <div class="card-body">
            
            <form action="" method="POST">
                @csrf
                @method('PUT')

                {{-- @method('PUT') --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputType">Type</label>
                            <select name="type" class="form-control" id="inputType">
                                <option selected disabled>{{$hazard['hazardTypeName']}}</option>
                                @foreach ($hazardTypes as $hazardType)
                                    <option value="{{$hazardType['id']}}">{{$hazardType['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputCategory">Category</label>
                            <select name="category" class="form-control" id="inputCategory">
                                <option selected disabled>{{$hazard['hazardCategoryName']}}</option>
                                @foreach ($hazardCategories as $hazardCategory)
                                    <option value="{{$hazardCategory['id']}}">{{$hazardCategory['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputSource">Source</label>
                            <select name="source" class="form-control" id="inputSource">
                                <option selected disabled>{{$hazard['hazardSourceName']}}</option>
                                @foreach ($hazardSources as $hazardSource)
                                    <option value="{{$hazardSource['id']}}">{{$hazardSource['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" name="title" value="{{$hazard['hazardTitle']}}" class="form-control" id="inputTitle" placeholder="Title"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputReporterType">Reporter Type</label>
                            <select name="reporterType" class="form-control" id="inputReporterType">
                                <option selected disabled>{{$hazard['reporterTypeName']}}</option>
                                @foreach ($reporterTypes as $reporterType)
                                <option value="{{$reporterType['id']}}">{{$reporterType['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputReporter">Reporter Name</label>
                            <input type="text" name="reporter" value="{{$hazard['reporter']}}" class="form-control" id="inputReporter" placeholder="Reporter Name"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputDistrict">District</label>
                            <select name="district" class="form-control" id="inputDistrict">
                                <option selected disabled>..Select District..</option>
                                @foreach ($districts as $district)
                                <option value="{{$district['id']}}">{{$district['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputShehia">Shehia</label>
                            <select name="shehia" class="form-control" id="inputShehia">
                                <option selected disabled>{{$hazard['shehiaName']}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputPlace">Place</label>
                            <input type="text" value="{{$hazard['place']}}" name="place" class="form-control" id="inputPlace" placeholder="Place"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputReportedDate">Reported Date</label>
                            <Input type="date" value="{{date('Y-m-d', strtotime($hazard['reportedDate']))}}" name="reportedDate" class="form-control" id="inputReportedDate" placeholder="Reported Date">
                               
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputstartDate">Start Date</label>
                            <input type="date" name="startDate" value="{{date('Y-m-d', strtotime($hazard['startDate']))}}" class="form-control" id="inputstartDate" placeholder="Start Date"/>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputDescription">Descreptions</label>
                            <textarea name="description"  class="form-control" id="inputDescription" placeholder="Descriptions" rows="4">{{$hazard['description']}}</textarea>
                               
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group">
                        <a href="/hazard-list" class="btn btn-secondary">Back To List</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection