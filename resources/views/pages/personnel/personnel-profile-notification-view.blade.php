

<hr>
<H2> Personnel Upcoming Events </H2>
<table id="example1" class="display" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Event Name</th>
    <th>Event Venue</th>
    <th>Priest Name</th>
    <th>Event Started</th>
    <th>Event Ended</th>
</tr>
</thead>
<tfoot>
<tr>
    <th>Event Name</th>
    <th>Event Venue</th>
    <th>Priest Name</th>
    <th>Event Started</th>
    <th>Event Ended</th>
</tr>
</tfoot>
<tbody>

    @foreach($upComingEvents as $event)
        <tr>
            <td>{{$event->name}}</td>
            <td>{{$event->venue}}</td>
            <td>{{$event->priest_name}}</td>
            <td>{{date("F jS, Y g:i a", strtotime($event->date_time_start))}}</td>
            <td>{{date("F jS, Y g:i a", strtotime($event->date_time_end))}}</td>
        </tr>
    @endforeach;

</tbody>
</table>
