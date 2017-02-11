
<h3>Student List</h3>

  <div id="signupbox" style=" margin-top:50px; width:100%"  >
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Personnel View</div> 
        </div>  
        <div class="panel-body" > 
           <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr> 
                        <th>Religion</th> 
                        <th>Id Number</th>
                        <th>Name</th>
                        <th>Mobile Number</th> 
                        <th>Year level</th> 
                        <th>Course</th> 
                        <th>Gender</th>   
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Religion</th> 
                        <th>Id Number</th>
                        <th>Name</th>
                        <th>Mobile Number</th> 
                        <th>Year level</th> 
                        <th>Course</th> 
                        <th>Gender</th>   
                    </tr>
                </tfoot>
                <tbody>  
                   @include("pages/admin/includes/religion-sorting")     
                    @foreach($students as $student)  
                      <tr>
                        <td> {{$student->religion}} </td>
                        <td> {{$student->id_number}} </td>
                        <td> {{$student->first_name . ' ' . $student->last_name}} </td>
                        <td> {{$student->mobile_number}} </td>
                        <td> {{$student->year_level}} </td>
                        <td> {{$student->course}} </td>
                        <td> {{$student->gender}} </td>  
                      </tr>
                    @endforeach

                   
                </tbody>
            </table>
        </div>
    </div>
</div>