


<h1> Attendance Details </h1>  
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th> 
      </tr>
    </thead>
    <tbody> 

    @foreach($event as $key => $value)
      <tr>
        <td style="width: 20%;"> name </td>
        <td>{{$value->name}}</td>
        </tr>
        <td> venue </td>
        <td>{{$value->venue}}</td>
        </tr>
        <td> description </td>
        <td>{{$value->description}}</td>
        </tr>
        <td> sponsor personnels </td>
        <td>{{App\Personnel::getNamesByIdList($value->sponsor_personnels)}}</td>
        </tr>

        <td> participant personnel </td>
        <td>{{App\Personnel::getNamesByIdList($value->participant_personnels)}}</td>
        </tr>
        <td style="display:none"> participant religion </td>
        <td style="display:none">{{$value->participant_religion}}</td>
        </tr>
        <td> participant year </td>
        <td>{{$value->participant_year}}</td>
        </tr>
        <td> date time start </td>
        <td>{{$value->date_time_start}}</td>
        </tr>
        <td> date time end </td>
        <td>{{$value->date_time_end}}</td>
        </tr> 
      </tr> 
    @endforeach

  
    </tbody>
  </table> 
  <hr> 

