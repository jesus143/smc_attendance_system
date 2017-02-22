
<h3> Add Event </h3>
<br>



@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<form method="post" action="{{route('event.store')}}" >  

  {{csrf_field()}}


  <input type="hidden" class="form-control" name="type" value="personnel" />

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type event name" name="name" />
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Venue</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type event description" name="venue" />
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Priest Name</label>
      <input type="text" class="form-control" id="priest_name" aria-describedby="emailHelp" placeholder="Priest Name" name="priest_name" />
    </div>

  <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <textarea name="description" placeholder="Type event description" class="form-control" style="resize:none" ></textarea>
    </div>


  <div class="form-group">
      <label for="exampleInputEmail1">Sponsor</label>
        <em><lable>Personnels</lable></em><br>
        <select name="sponsor_personnels[]" multiple class="form-control" > 
          @foreach($personnels as $personnel)
            <option value="{{$personnel->id}}">{{$personnel->first_name  . ' ' . $personnel->last_name . ', ' . $personnel->department}},  
            {{$personnel->position}}</option>  
          @endforeach 
        </select>


      <label for="exampleInputEmail1">Participant</label>
      <em><lable>Personnels</lable></em><br>
        <select name="participant_personnels[]" multiple class="form-control" >
          @foreach($personnels as $personnel)
            <option value="{{$personnel->id}}">{{$personnel->first_name  . ' ' . $personnel->last_name . ', ' . $personnel->department}},
              {{$personnel->position}}</option>
          @endforeach
        </select>



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
      <label for="exampleSelect2">Date Time Started</label>
      <input name="date_time_start" type="datetime-local"  class="form-control" >
    </div> 

    <div class="form-group">
      <label for="exampleSelect2">Date Time End</label> 
        <input name="date_time_end" type="datetime-local"  class="form-control" >
    </div> 






  <button type="submit" class="btn btn-primary">Submit</button>
</form>