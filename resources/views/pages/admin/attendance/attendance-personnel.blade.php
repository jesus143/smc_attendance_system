 
<Br><br>
<h1> Personnel Registered This Event</h1>

@if(session('delete_student_attendance_status'))
    <div class="alert alert-success"> 
        {{session('delete_student_attendance_status')}}
    </div>
@endif


<div id="signupbox" style=" margin-top:50px; width:100%"  >
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Personnel View</div> 
        </div>  
        <div class="panel-body" > 
           <table id="example1" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr> 
                        
                        <th>Name</th>
                        <th>Possition</th>
                        <th>In</th>
                        <th>Out</th>
                        <th>In Time</th>  
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Possition</th>
                        <th>In</th>
                        <th>Out</th>
                        <th>In Time</th>  
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($personnelEvents as $attendant)
                        <tr>
                            <td> {{$attendant->first_name . ' ' . $attendant->last_name }}</td>  
                            <td> {{$attendant->position}}</td>
                            <td> {{$attendant->status_in}}</td>  
                            <td> {{$attendant->status_out}}</td>  
                            <td> {{$attendant->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('attendance.print.personnel', $id)}}" >
                <input type="button" value="print" class="alert alert-info" />
            </a>
        </div>
    </div>
</div>