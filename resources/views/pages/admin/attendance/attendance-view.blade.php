 

<div class="row bootstrap snippets"> 
    @foreach($events as $event)
        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big-shadow">
                <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                    <div class="content">
                        <h7 class="title"><a href="#">{{$event->type}}</a></h7>
                        <h6 class="category">{{ date("F jS, Y", strtotime($event->date_time_start))}} - {{date("F jS, Y", strtotime($event->date_time_end))  }}</h6>
                        <h4 class="title"><a href="#">{{$event->name}}</a></h4>
                        <p>
                            {{$event->description}}
                        </p> 
                        <p class="description"><a href="{{route('attendance.show', $event->id) . '/' . $event->type}}">more..</a>
                    </div> 
                </div> <!-- end card -->
            </div>
        </div>
    @endforeach
 
</div>
<br>
<br>
<br>
<br>