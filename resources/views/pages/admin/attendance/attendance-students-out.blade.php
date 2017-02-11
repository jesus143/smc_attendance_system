 

<h1> Student Registered This Event Sign Out</h1>  
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
                        <th>Description</th>  
                        <th>Delete</th> 
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th> 
                        <th>Religion</th>
                        <th>In Time</th>  
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody> 
                   @include("pages/admin/includes/religion-sorting")    
                    @foreach($studentEventsOut as $attendant)  
                        <tr>
                            <td> {{$attendant->first_name . ' ' . $attendant->last_name }}</td>  
                            <td> {{$attendant->religion}}</td>  
                            <td>{{$attendant->created_at}}</td>  
                            <td> <a href="{{route('student.destroy', $attendant->id)}}">Delete</a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>