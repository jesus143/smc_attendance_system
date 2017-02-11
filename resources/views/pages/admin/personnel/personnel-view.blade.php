
<h3> Event List </h3>

  <div id="signupbox" style=" margin-top:50px; width:100%"  >
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Personnel View</div> 
        </div>  
        <div class="panel-body" > 

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        
           <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr> 
                         <th>Name</th>
                        <th>Mobile Number</th> 
                        <th>Position</th> 
                        <th>Department</th>  
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Mobile Number</th> 
                        <th>Position</th> 
                        <th>Department</th>  
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody> 
                    @foreach($personnels as $personnel)   
                        <td>{{$personnel->first_name . ' ' . $personnel->last_name }}</td>
                        <td>{{$personnel->mobile_number}}</td>                               
                        <td>{{$personnel->position}}</td>                               
                        <td>{{$personnel->department}}</td>                               
{{--                         <td> <a href="{{route('personnel.edit', $personnel->id)}}">Details</a> </td>
                        <td> <a href="{{route('personnel.show', $personnel->id)}}">Edit</a> </td> --}}
                        <td> 
                            <form action="{{route('personnel.destroy', $personnel->id)}}" method="POST" accept-charset="utf-8">
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