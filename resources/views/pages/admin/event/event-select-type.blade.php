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


                        <a href="{{ route('event.index') . '/student' }}">
                            <input type="button" value="Create Student Event" class="alert alert-info" />
                        </a>

                        &nbsp;&nbsp;
                        <a href="{{ route('event.index') . '/personnel' }}">
                            <input type="button" value="Create Personnel Event" class="alert alert-default" />
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
