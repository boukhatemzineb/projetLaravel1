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
<!--modal ajouter event -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Ajouter Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><form>
      <div class="form-group">
                   <label for="nom">Date</label><br>
                   <input type="text" class="form-control form-control-lg" name="date" placeholder="">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Heure</label>
                   <input type="text" class="form-control form-control-lg" name="heure" placeholder="">
                 </div>
                 <div class="form-group">
                   
                   <input type="hidden" class="form-control form-control-lg" name="id_client" placeholder="{{$client->id}}">
                 </div>
                 <div class="form-group">
                   
                   <input type="hidden" class="form-control form-control-lg" name="id_contact" placeholder="{{$contact->id}}">
                 </div>
                 
                 <div class="form-group">
                   <label for="bio">Compte Rendu</label>
                   <textarea class="form-control" name="description" rows="3"></textarea>
                 </div>
              
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Eregistrer</button>
    
	  </div></form></div></div></div>

    <!--modal modifier -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Modifier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><form>
      <div class="form-group">
                   <label for="nom">Date</label><br>
                   <input type="text" class="form-control form-control-lg" name="date" placeholder="">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Heure</label>
                   <input type="text" class="form-control form-control-lg" name="heure" placeholder="">
                 </div>
                 
                 <div class="form-group">
                   <label for="bio">Compte Rendu</label>
                   <textarea class="form-control" name="description" rows="3"></textarea>
                 </div>
              
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Eregistrer</button>
    

      
	  </div></form></div></div></div>
          @endsection