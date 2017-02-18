
<h3> Add Event </h3>
<br>



@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

  
<form method="post" action="{{route('event.update', $id)}}" >  

 <input name="_method" type="hidden" value="PATCH">

  {{csrf_field()}}

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type event name" name="name" value="{{$eventDetails->name}}" />
    
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Venue</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type event description" name="venue" value="{{$eventDetails->venue}}" />
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea name="description" placeholder="Type event description" class="form-control" style="resize:none" >{{$eventDetails->description}}</textarea>
      
    </div> 

  <div class="form-group">
      <label for="exampleInputEmail1">Sponsor</label>  
        <em><lable>Personnels</lable></em><br>
        <select name="sponsor_personnels[]" multiple class="form-control" > 
         

          @foreach($personnels as $personnel)
            
            @if(in_array($personnel->id, App\Personnel::listIdToArray($eventDetails->sponsor_personnels)))

            <option value="{{$personnel->id}}" selected>{{$personnel->first_name  . ', ' . $personnel->department . ', ' . $personnel->last_name}},  
            {{$personnel->position}}</option>   
            @else 
              <option value="{{$personnel->id}}">{{$personnel->first_name  . ', ' . $personnel->department . ', ' . $personnel->last_name}},  
            {{$personnel->position}}</option>  

            @endif



          @endforeach 
        </select> 

        <div style="display:none">
          <br> 
          <label for="exampleInputEmail1">Sponsor</label>  
          <em><lable>Students</lable></em><br>
          <select name="sponsor_students[]" multiple class="form-control">
          @foreach($students as $student) 
            <option value="{{$student->id}}">{{$student->first_name . ' ' . $student->last_name . ', ' . $student->course . ', ' . $student->year_level}}</option> 
          @endforeach   
          </select>
        </div>
  
        <div style="display:none">
        <br>
        <label for="exampleInputEmail1">Sponsor</label>  
        <em><lable>Colleges</lable></em><br>
        <select name="sponsor_collge[]" multiple class="form-control">
          @foreach($data['college'] as $college)
            <option value="{{$college}}">{{$college}}</option>  
          @endforeach
        </select>  
        <br>
        </div>

        <div style="display:none">
        <label for="exampleInputEmail1">Sponsor</label>  
        <em><lable>Year</lable></em><br>
        <select name="sponsor_year[]" multiple class="form-control">
             @foreach($data['year'] as $yearNum => $yearVal)
              <option value="{{$yearNum}}">{{$yearVal}}</option>  
            @endforeach
        </select> 
        <br>
        </div>


    </div>


    <div class="form-group">
      <label for="exampleSelect2">Participants </label> 
      <em><lable>College</lable></em><br>
      <select name="participant_collge[]" multiple class="form-control" id="exampleSelect2">
          @foreach($data['college'] as $college)

           @if(in_array($college, App\Student::listIdToArray($eventDetails->participant_collge)))
            <option value="{{$college}}" selected>{{$college}}</option>   
            @else 
                  <option value="{{$college}}">{{$college}}</option>   
            @endif

          @endforeach
      </select>
    </div> 

    <div class="form-group"  style="display:none" >

      <label for="exampleSelect2">Participants</label> 
      <em><lable>Religion</lable></em><br>
      <select name="participant_religion[]" multiple class="form-control" id="exampleSelect2">
          @foreach($data['religion'] as $religion)
            <option value="{{$religion}}">{{$religion}}</option>  
          @endforeach
      </select>
    </div> 

    <div class="form-group">
      <label for="exampleSelect2">Participants</label> 
      <em><lable>College Year</lable></em><br>
      <select name="participant_year[]" multiple class="form-control" id="exampleSelect2">
          @foreach($data['year'] as $yearNum => $yearVal)

          
           @if(in_array($yearNum, App\Student::listIdToArray($eventDetails->participant_year)))   
           <option value="{{$yearNum}}" selected>{{$yearVal}}</option>   
            @else 
                     <option value="{{$yearNum}}">{{$yearVal}}</option>  
            @endif 
          @endforeach
      </select>
    </div> 

    <div class="form-group">
      <label for="exampleSelect2">Date Time Started</label>
       at <b> {{$eventDetails->date_time_start}} </b><br>
      <input name="date_time_start" type="datetime-local"  class="form-control" value="{{$eventDetails->date_time_start}}" >
    </div>  

    <div class="form-group">
    
      <label for="exampleSelect2">Date Time End</label>  
       at <b> {{$eventDetails->date_time_end}} </b><br>
      <input name="date_time_end" type="datetime-local"  class="form-control" value="" >
    </div> 







  <button type="submit" class="btn btn-primary">Update</button>
</form>