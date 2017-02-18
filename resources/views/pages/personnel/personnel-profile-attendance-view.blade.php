

<hr>
<H2> Student Event Attendance</H2> <br>
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
