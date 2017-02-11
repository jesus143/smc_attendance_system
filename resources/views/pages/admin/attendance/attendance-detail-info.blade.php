


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
        <td> sponsor students </td>
        <td>{{App\Student::getNamesByIdList($value->sponsor_students)}}</td>
        </tr>
        <td> sponsor college </td>
        <td>{{$value->sponsor_collge}}</td>
        </tr>
        <td> sponsor year </td>
        <td>{{$value->sponsor_year}}</td>
        </tr>
        <td> participant college </td>
        <td>{{$value->participant_collge}}</td>
        </tr>
        <td> participant religion </td>
        <td>{{$value->participant_religion}}</td>
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

