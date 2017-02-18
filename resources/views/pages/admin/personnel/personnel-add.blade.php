<div class="container">    
            
    <div id="signupbox" style="  width:78%"  >
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Add New Personnel</div> 
            </div>  
            <div class="panel-body" >

            @if (session('status1'))
                <div class="alert alert-success">
                    {{ session('status1') }}
                </div>
            @endif


                <form method="post" action="{{route('personnel.store')}}">

                        {{csrf_field()}}

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">First Name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="first_name" placeholder="First Name" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">Last Name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_email" name="last_name" placeholder="Last Name" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>   
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField">Mobile Number<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_email" name="mobile_number" placeholder="Mobile Number" style="margin-bottom: 10px" type="number" />
                            </div>     
                        </div>   
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Position <span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <select name="position" class="form-control" style="margin-bottom: 10px" > 
                                    <option>Please Select Position..</option>  
                                    @foreach($data['position'] as $position) 
                                        <option value="{{$position}}">{{$position}}</option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">College<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <select name="department" class="form-control" style="margin-bottom: 10px" > 
                                    <option>Please Select College..</option> 
                                     @foreach($data['college'] as $college) 
                                        <option value="{{$college}}">{{$college}}</option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>  
                        <div id="div_id_gender" class="form-group required">
                            <label for="id_gender"  class="control-label col-md-4  requiredField"> Gender<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                 <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_1" value="M"  style="margin-bottom: 10px">Male</label>
                                 <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_2" value="F"  style="margin-bottom: 10px">Female </label>
                            </div>
                        </div> 
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Create" value="Create" class="btn btn-primary"   /> 
                            </div>
                        </div>  
                    </form>  
            </div>
        </div>
    </div> 
</div>
    



 