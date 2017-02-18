 

<h1> Student Registered This Event</h1>  

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
           <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr> 
                        
                        <th>Name</th>
                        <th>Religion</th>
                        <th>In</th>
                        <th>Out</th>
                        <th>In Time</th>  
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Religion</th>
                        <th>In</th>
                        <th>Out</th>
                        <th>In Time</th>  
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody> 
                   @include("pages/admin/includes/religion-sorting")     
                    @foreach($studentEvents as $attendant)  
                        <tr>
                            <td> {{$attendant->first_name . ' ' . $attendant->last_name }}</td>  
                            <td> {{$attendant->religion}}</td>  
                            <td> {{$attendant->status_in}}</td>  
                            <td> {{$attendant->status_out}}</td>  
                            <td>{{$attendant->created_at}}</td>  

                            <td> 
                                <form action="{{route('attendance.destroy', $attendant->id)}}" method="POST" accept-charset="utf-8">
                                    <input name="_method" type="hidden" value="DELETE">
                                    {{ csrf_field() }}
                                    <input type="submit" value="delete" /> 
                                </form>  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>