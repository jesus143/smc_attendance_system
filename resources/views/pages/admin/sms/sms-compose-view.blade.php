<!-- /.modal compose message -->
 
<div   id="modalCompose">
    <div class="modal-dialog" style="width:100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Compose Message</h4>
            </div>
             <form role="form" class="form-horizontal" action="{{route('sms.store')}}" method="post"> 

            <div class="modal-body">
               
                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="col-sm-2" for="inputTo">To Event</label>   
                        <div class="col-sm-10">
                            <select class="form-control" name="send_to" > 
                                @foreach($events as $event) 
                                    <option value="{{$event->id}}">{{$event->name}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-12" for="inputBody">Message</label>
                        <div class="col-sm-12"><textarea class="form-control" id="inputBody" rows="18" name="message"></textarea></div>
                    </div>
            </div>
            <div class="modal-footer"> 
                <button type="submit" class="btn btn-primary ">Send <i class="fa fa-arrow-circle-right fa-lg"></i></button>

            </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal compose message -->