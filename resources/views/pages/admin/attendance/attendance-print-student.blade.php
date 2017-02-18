

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('public/bootstrap/bootstrap.min.css')}}">
    <script src="{{url('public\bootstrap\jquery.min.js')}}"></script>
    <script src="{{url('public/bootstrap/bootstrap.min.js')}}"></script>
</head>
<body onload="print()" >

<div class="container">
    <h2> <img src="{{url('public/St._Michael_s_College_of_Iligan_logo.jpg')}}" style="height: 86px;" /> </h2>
    <br><p><b>Event Information</b> </p>
    <table class="table table-bordered">
        <tbody>
            @foreach($eventDetails as $eventDetail )
                    <td style="width:200px;"> Event Name </td> <td>{{$eventDetail->name}}</td> <tr>
                    <td> Event Venue </td> <td>{{$eventDetail->venue}}</td><tr>
                    <td> Event Priest </td> <td>{{$eventDetail->priest_name}}</td><tr>
                    <td> Event Description </td> <td>{{$eventDetail->description}}</td><tr>
                    <td> Event Started </td> <td>{{date("F jS, Y g:i a", strtotime($eventDetail->date_time_start))}}</td><tr>
                    <td> Event Ended </td> <td>{{date("F jS, Y g:i a", strtotime($eventDetail->date_time_end))}}</td><tr>
                @break
            @endforeach
        </tbody>
    </table>
    <hr>
    <p><b>Event Information</b> </p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id Number</th>
            <th>Full Name</th>
            <th>Mobile Number</th>
            <th>Religion</th>
            <th>Year Level</th>
            <th>Course</th>
            <th>Gender</th>
            <th>Sign In</th>
            <th>Sign Out</th>
        </tr>
        </thead>
        <tbody>
        @foreach($eventDetails as $eventDetail )
             <tr>
                <td>{{$eventDetail->id_number}}</td>
                <td>{{$eventDetail->first_name . ' ' . $eventDetail->last_name }}</td>
                <td>{{$eventDetail->mobile_number}}</td>
                <td>{{$eventDetail->religion}}</td>
                <td>{{$eventDetail->year_level}}</td>
                <td>{{$eventDetail->course}}</td>
                <td>{{$eventDetail->gender}}</td>
                <td>{{$eventDetail->status_in}}</td>
                <td>{{$eventDetail->status_out}}</td>
             </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
