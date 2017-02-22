
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
                        <th>name</th>
                        <th>venue</th>
                        <th>priest name </th>
                        <th>description</th> 
                        <th>date_time_start</th>
                        <th>date_time_end</th>
                        <th>Details</th>
                        {{-- <th>Edit</th> --}}
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>name</th>
                        <th>venue</th>
                        <th>priest name </th>
                        <th>description</th>
                        <th>date_time_start</th>
                        <th>date_time_end</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody> 
                    @foreach($events as $event)
                        <tr> 
                            <td>{{$event->name}}</td>
                            <td>{{$event->venue}}</td>
                            <td>{{$event->priest_name}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->date_time_start}}</td>
                            <td>{{$event->date_time_end}}</td>  
                            <td> <a href="{{route('attendance.show', $event->id) . '/personnel'}}">Details</a> </td>
                            {{-- <td> <a href="{{route('event.edit', $event->id)}}">Edit</a> </td> --}}
                            <td>   
                            <a href="{{route('event.show', $event->id) . '/personnel' }}">
                                <input type="submit" value="Edit" />
                            </a>
                            </td> 
                            <td>  
                            <form action="{{route('event.destroy', $event->id)    }}" method="POST" accept-charset="utf-8">
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