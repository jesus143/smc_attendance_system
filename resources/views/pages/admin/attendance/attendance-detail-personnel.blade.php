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
                    @include("pages/admin/attendance/attendance-add-personnel", compact('id'))
                    @include("pages/admin/attendance/attendance-detail-info")
                    @include("pages/admin/attendance/attendance-personnel")
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

