
<div class="container">    
            

    @if(session('status'))  
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    <div id="signupbox" style="  width:78%"  >
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Add New Student</div> 
            </div>  
            <div class="panel-body" >
                <form method="post" action="{{route('student.store')}}"> 
                    {{csrf_field()}}
                      <input class="input-md emailinput form-control" id="id_email" name="bio" placeholder="Last Name" style="margin-bottom: 10px" type="hidden"  />
                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">ID Number<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="id_number" placeholder="ID Number" style="margin-bottom: 10px" type="text" required="" />
                        </div>
                    </div> 
                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">First Name<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="first_name" placeholder="First Name" style="margin-bottom: 10px" type="text" required="" />
                        </div>
                    </div>  
                    
                    <div id="div_id_email" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField">Last Name<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="id_email" name="last_name" placeholder="Last Name" style="margin-bottom: 10px" type="text" required="" />
                        </div>     
                    </div>   

                    <div id="div_id_email" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField">Mobile Number<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md emailinput form-control" id="id_email" name="mobile_number" placeholder="Mobile Number" style="margin-bottom: 10px" type="number" required="" />
                        </div>     
                    </div>   

                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">College<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "> 
                            <select name="course" class="form-control" style="margin-bottom: 10px" required="" > 
                                <option>Please Select Course</option>
                                @foreach($data['college'] as $college)
                                    <option value="{{$college}}">{{$college}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>  
                     <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">Religion<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "> 
                            <select name="religion" class="form-control" style="margin-bottom: 10px" required="" > 
                                <option>Please Select Religion</option>
                                <option>Christian</option>
                                <option>Muslim</option> 
                            </select>
                        </div>
                    </div>  
                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField">Year Level<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "> 
                            <select name="year_level" class="form-control" style="margin-bottom: 10px" required="" > 
                                <option>Please Select Your Year Level</option>
                                <option>1</option>
                                <option>2</option> 
                                <option>3</option> 
                                <option>4</option> 
                            </select>
                        </div>
                    </div>  
                    <div id="div_id_gender" class="form-group required">
                        <label for="id_gender"  class="control-label col-md-4  requiredField"> Gender<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  style="margin-bottom: 10px">
                             <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_1" value="M"  style="margin-bottom: 10px" required="" >Male</label>
                             <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_2" value="F"  style="margin-bottom: 10px" required="">Female </label>
                        </div>
                    </div> 
                    <div class="form-group"> 
                        <div class="aab controls col-md-4 "></div>
                        <div class="controls col-m1d-8 ">
                            <input type="submit" name="Signup" value="Add" class="btn btn-primary"   /> 
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </div> 
</div>
    



 