@extends('layouts.app') 
@section('content')

<style type="text/css" media="screen">
    .header-menu-container{ 
    display:none; }    
</style>
<div class="container">
    <div class="row"> 
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div> 
                <div class="panel-body">

                    @include("pages/personnel/personnel-profile-view");

                    @include("pages/personnel/personnel-profile-notification-view");

                    @include("pages/personnel/personnel-profile-attendance-view");

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

