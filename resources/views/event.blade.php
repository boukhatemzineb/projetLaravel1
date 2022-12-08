<<<<<<< HEAD

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


  <html>
    <body>

               <br><br>
     <center><h1> Détails du contact </h1></center>

    <FONT size="5pt"> <p> <B> Nom :</B>  {{$contact->nom}} </p> </FONT>
    <FONT size="5pt"> <p>  <B>  Prenom: </B>   {{$contact->prenom}}</p> </FONT>
    <FONT size="5pt"> <p>  <B> Fonction : </B>{{$contact->fonction}} </p> </FONT>
    <FONT size="5pt"> <p>  <B> Email : </B>  {{$contact->email}} </p> </FONT> 
<br><br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ajouter Rendez vous
</button>
 <br><br>
 @foreach($events as $event)
 <div class="card">
  <div class="card-header">
    RENDEZ VOUS
  </div>
  
  <div class="card-body">
  <p class="card-title">LE :{{$event->date}} </p> <br>
 <p class="card-title">A :{{$event->heure}}</p><br>
     
     <h4>compte rendu </h4>
   <p class="card-text">{{$event->description}}
  </div>
  <div class="card-footer text-muted">
 <center>  <table><tr><td> <a     
                
                        href="javascript:void(0)"
                        id="edit-event"
                        data-url="{{ route('Event.show', $event->id) }}"
                        class="btn btn-warning"
                        >Modifier</a> 
</td><td>
                        <form method="GET" action="{{route('suprimerevent')}}">
                        @method('DELETE')
                      @csrf
                      <input type="number" name="idC" value="{{$contact->id}}" style="display:none" > 
                      <input type="number" name="idE" value="{{$event->id}}" style="display:none" >
                       <br> <button type="submit" class="btn btn-danger">Supprimer </button>
                              </form> 
</td></tr></table>         
<center>
</div>
  
</div>    <br><br>
@endforeach
=======
@extends('administrateur')
@section('content')
<br><br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ajouter Event
</button>
 <br><br>
 
 <div class="card">
  <div class="card-header">
    EVENT
  </div>
  <div class="card-body">
  <p class="card-title"> </p> 
 <p class="card-title">a :</p><br>
     <p class="card-text "> contact</p> 
     <p class="card-text">client</p>
     <h4>compte rendu </h4>
   <p class="card-text">ffffffffffffffffffffffffffffffffffffffffffffff
      ggggggggggggggggggggggggggggggggggggggg

  </div>
  <div class="card-footer text-muted">
 <center> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
Modifier
</button><center>

  </div>
</div>
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
<!--modal ajouter event -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
<<<<<<< HEAD
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Ajouter Renedez vous </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST"   action="{{route('Event.store')}}">
        @csrf 
                     <input type="number" name="idC" value="{{$contact->id}}" style="display:none" > 
                      <input type="number" name="idU" value="1" style="display:none" >
                   <div class="form-group">
                   <label for="nom">Date</label><br>
                   <input type="date" class="form-control form-control-lg" name="date" placeholder="">
=======
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Ajouter Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><form>
      <div class="form-group">
                   <label for="nom">Date</label><br>
                   <input type="text" class="form-control form-control-lg" name="date" placeholder="">
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Heure</label>
                   <input type="text" class="form-control form-control-lg" name="heure" placeholder="">
                 </div>
<<<<<<< HEAD
                
=======
                 <div class="form-group">
                   
                   <input type="hidden" class="form-control form-control-lg" name="id_client" placeholder="{{$client->id}}">
                 </div>
                 <div class="form-group">
                   
                   <input type="hidden" class="form-control form-control-lg" name="id_contact" placeholder="{{$contact->id}}">
                 </div>
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
                 
                 <div class="form-group">
                   <label for="bio">Compte Rendu</label>
                   <textarea class="form-control" name="description" rows="3"></textarea>
                 </div>
              
      <div class="modal-footer">
<<<<<<< HEAD
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Eregistrer</button>
	  </div>
  </form>
</div></div></div></div>
=======
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Eregistrer</button>
    
	  </div></form></div></div></div>
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd

    <!--modal modifier -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<<<<<<< HEAD
    <div class="modal fade" id="event" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Modifier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<<<<<<< HEAD
      </div> <div class="modal-body">
      <form method="GET"  action="{{route('modifierevent')}}">
        @csrf
      <input type="number" name="idC" value="{{$contact->id}}" style="display:none" > 
      <input type="number" name="idE" id="event-id" value="" style="display:none">
                  <div class="form-group">
                   <label for="nom">Date</label><br>
                   <input type="date" class="form-control form-control-lg" name="date" id="event-date" value="">
=======
      </div><form>
      <div class="form-group">
                   <label for="nom">Date</label><br>
                   <input type="text" class="form-control form-control-lg" name="date" placeholder="">
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Heure</label>
<<<<<<< HEAD
                   <input type="text" class="form-control form-control-lg" name="heure" id="event-heure" value="">
=======
                   <input type="text" class="form-control form-control-lg" name="heure" placeholder="">
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
                 </div>
                 
                 <div class="form-group">
                   <label for="bio">Compte Rendu</label>
<<<<<<< HEAD
                   <textarea class="form-control" name="description" id="event-description" value="" rows="3"></textarea>
                 </div>
              
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Eregistrer</button>
    

      
	  </div></form></div></div></div></div>


    <script type="text/javascript">
  
   
        
        $('body').on('click', '#edit-event', function () {
          var contactURL = $(this).data('url');
          $.get(contactURL, function (data) {
            $('#event').modal('show');
              $('#event-date').val(data.date);
              $('#event-heure').val(data.heure);
              $('#event-description').val(data.description);
              $('#event-id').val(data.id);
             
          })
       });
       
      </script>
         </body></html>
=======
                   <textarea class="form-control" name="description" rows="3"></textarea>
                 </div>
              
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Eregistrer</button>
    

      
	  </div></form></div></div></div>
          @endsection
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
