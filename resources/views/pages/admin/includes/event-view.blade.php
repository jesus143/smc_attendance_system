
<h3> Event List </h3>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Venue</th>
        <th>Colleges</th> 
        <th>Start Time</th>
        <th>End Time</th>
        <th>Total Attendance</th>
      </tr>
    </thead>
    <tbody>

      <?php for($i =0; $i<3; $i++) {?>
      <tr>
        <td>Recollection</td>
        <td>This is the recollection for 4rth year student only</td>
        <td>CDO, St. Conception</td>
        <td>CECS, BSBA, COC</td>
        <td>Jan 20, 2017 7:30 am</td>
        <td>Jan 20, 2017 5:30 pm</td>
        <td><a href="{{route('pages.attendance.event', rand(1, 10))}}"><?php print rand(1, 10); ?> </a></td>
      </tr> 
      <?php } ?>

    </tbody>
  </table>