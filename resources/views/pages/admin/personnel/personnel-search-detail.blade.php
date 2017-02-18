@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 ">
                @include("pages/admin/includes/left-sidebar")
            </div>
            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Student Event Attendance</div>
                    <div class="panel-body">
                        <div id="signupbox" style=" margin-top:50px; width:100%"  >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">Student Attendance and events</div>
                                </div>
                                <div class="panel-body" >
                                    <table id="example" class="display" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>Event Name</th>
                                            <th>Event Venue</th>
                                            <th>Priest Name</th>
                                            <th>Event Started</th>
                                            <th>Event Ended</th>
                                            <th>Sign In</th>
                                            <th>Sign Out</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Event Name</th>
                                            <th>Event Venue</th>
                                            <th>Priest Name</th>
                                            <th>Event Started</th>
                                            <th>Event Ended</th>
                                            <th>Sign In</th>
                                            <th>Sign Out</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($personnelEvents as $event)
                                                <tr>
                                                    <td>  {{$event->name}} </td>
                                                    <td>  {{$event->venue}} </td>
                                                    <td>  {{$event->priest_name}} </td>
                                                    <td>  {{$event->date_time_start}} </td>
                                                    <td>  {{$event->date_time_end}} </td>
                                                    <td>  {{$event->status_in}} </td>
                                                    <td>  {{$event->status_out}} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

