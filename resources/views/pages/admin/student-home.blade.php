@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-2 ">
            @include("pages/admin/includes/left-sidebar")
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div> 
                <div class="panel-body">  
                    {{-- @include("pages/admin/student/student-test-datatable")   
                    <hr> --}}
                    {{-- @include("pages/admin/student/student-add")  --}}
                    <hr>
                    @include("pages/admin/student/student-view") 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

