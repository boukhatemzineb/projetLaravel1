
   @extends('user')
@section('oper')
<br><br><br><br>
@foreach($events as $event)
 <div class="card col-9">
  <div class="card-header">
    EVENT
  </div>
  <div class="card-body">
  <p class="card-title">Le:{{$event->date}} </p> 
 <p class="card-title">a : {{$event->heure}}</p><br>
     <p class="card-text ">avec: contact</p> 
     
     <h4>compte rendu </h4>
   <p class="card-text">{{$event->description}}

  </div>
  <div class="card-footer text-muted">
 2 days;
  </div>
</div>
@endforeach
    @endsection