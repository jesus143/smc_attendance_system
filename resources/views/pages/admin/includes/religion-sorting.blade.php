

<select id="msds-select" class="form-control" >
	<option>None</option>  
	@foreach($data['religion'] as $religion)  
		<option value="{{$religion}}">{{$religion}}</option>   
	@endforeach   
	@foreach($data['attendanceStatus'] as $aStat)  
		<option value="{{$aStat}}">{{$aStat}}</option>   
	@endforeach  
</select>
<br><br> 
<br><br>

        