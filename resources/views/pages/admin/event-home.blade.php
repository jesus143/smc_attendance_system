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
             
                    @if(!empty($eventDetails))
                        @include("pages/admin/event/event-edit", compact('students','personnels', 'eventDetails', 'id')) 
                    @else
                        @include("pages/admin/includes/event-add", compact('personnels', 'students')) 
                    @endif
                    <hr>
                    @include("pages/admin/includes/event-view", compact('events')) 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
