@extends('admin.headerDashboard')
@section('content')
@include('admin.sidebar')
<div align="center" style="padding:100px;">
            <form action="" style=" width:1000px;">
                <div class="form-group">
                    <input id="searchinput" style="width:60%" type="search" name="search" class="form-control" value="{{$search}}" placeholder="Search">
                   <input type="date" name="searchDate" id="searchDate" style="width:60%" class="form-control" value="{{$newDate}}">
                   <a href="{{url('/showAppointments?search=&searchDate=')}}" class="btn btn-success">Reset Date</a>
                   <button style="padding:10px;" class="btn btn-success">Search</button>
                </div>
            </form>
              <table id="AppointmentsTable">
                  <tr style="background-color:#a5c422;">
                      <th>Patient Name</th>
                      <th>Speciality</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Status</th>
                  </tr>
                  @foreach($data as $appoints)
                  @foreach($user as $users)
                  @if($appoints->userId == $users->id)
                  <tr align="center" style="border:collapse; backgroud-color:grey;">
                      <td>{{$users->name}}</td>
                      <td>{{$appoints->name}}</td>
                      <td>{{$appoints->date}}</td>
                      <td>{{$appoints->time}}</td>
                      <td>{{$appoints->status}}</td>
                      @endif
                    @endforeach   
                  </tr>
                  @endforeach
</div>

@stop