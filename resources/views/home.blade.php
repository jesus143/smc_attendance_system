@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4 ">
            <div class="panel panel-default"> 
                <div class="list-group"> 
                  <a href="#" class="list-group-item">Dashboard</a>
                  <a href="#" class="list-group-item">SMS</a>
                  <a href="#" class="list-group-item">Attendance</a> 
                </div>
            </div>
        </div>
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
