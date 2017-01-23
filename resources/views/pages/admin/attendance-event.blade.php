@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4 ">
          @include("pages/admin/includes/left-sidebar")
        </div>
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Attendance events here here!  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
