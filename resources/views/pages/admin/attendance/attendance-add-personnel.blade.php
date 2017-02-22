<h1> Add Personnel for this event </h1>

<div>
    <ul class="list-group" >
        @foreach ($errors->all() as $message)
            <li  class="list-group-item alert alert-danger" >
                {{$message}}
            </li>
        @endforeach

        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

    </ul>
</div>

<form class="form-inline" action="{{route('personnel.event.store')}}" method="POST" >
    {{csrf_field()}}
    <input type="hidden" value="{{$id}}" name="event_id" />
    <div class="form-group">
        <label >Personnel Id Number:</label><br>
        <input type="text" class="form-control" id="personnel_id" name="personnel_id" />
    </div>
    <br><br>
    <div class="form-group">
        <label class="radio-inline"><input type="radio" name="status"  value="in" checked>In</label>
        <label class="radio-inline"><input type="radio" name="status" value="out">Out</label>
    </div>
    <br><br>
    <button type="submit" class="btn btn-info">Register Student</button>
</form>
<hr>