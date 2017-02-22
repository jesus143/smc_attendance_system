

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMC Attendance Print</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('public/bootstrap/bootstrap.min.css')}}">
    <script src="{{url('public\bootstrap\jquery.min.js')}}"></script>
    <script src="{{url('public/bootstrap/bootstrap.min.js')}}"></script>
</head>
<body onload="print()" >

<div class="container">
    <h2> <img src="{{url('public/St._Michael_s_College_of_Iligan_logo.jpg')}}" style="height: 86px;" /> </h2>

    <H2>Personnel Information</H2> <br>

    <table class="table table-bordered">
        <tbody>
        @foreach($userEvents as $eventDetail )
            <td style="width:200px;">Full Name </td> <td>{{$eventDetail->first_name . ' ' . $eventDetail->last_name }}</td> <tr>
                <td> Mobile Number </td> <td>{{$eventDetail->mobile_number}}</td><tr>
                <td> Religion </td> <td>{{$eventDetail->religion}}</td><tr>
                <td> Religion Description</td> <td>{{$eventDetail->bio}}</td><tr>
                <td> Position </td> <td>{{$eventDetail->position}}</td><tr>
                <td> College </td> <td>{{$eventDetail->department}}</td><tr>
                <td> Gender </td> <td>{{$eventDetail->gender}}</td><tr>



            @break
        @endforeach
        </tbody>
    </table>
    <hr>




    <hr>
    <H2> Personnel Event Attendance</H2> <br>
    <table id="example" class="table table-bordered" cellspacing="0" width="100%">


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
        @foreach($userEvents as $event)
            <tr>
                <td>  {{$event->name}} </td>
                <td>  {{$event->venue}} </td>
                <td>  {{$event->priest_name}} </td>
                <td>  {{date("F jS, Y g:i a", strtotime($event->date_time_start))}} </td>
                <td>  {{date("F jS, Y g:i a", strtotime($event->date_time_end))}} </td>
                <td>  {{$event->status_in}} </td>
                <td>  {{$event->status_out}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</div>
</body>
</html>
