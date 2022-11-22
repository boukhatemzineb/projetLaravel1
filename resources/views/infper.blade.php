@extends('C_client')
@section('oper')
<!-- Modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Modifier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
	  <form method="POST" action="{{route('ContactM.update',$contact->id)}}">
		@csrf
	  <input type="hidden" name="_method" value="put"/>
	 
                                        <div class="form-group">
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" value="{{$contact->fonction}}" >
										</div>
										
										<div class="form-group">
											<label>Telephone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" value="{{$contact->telephone}}" >
										</div>
                                        
                                    
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" value="{{$contact->email}}" >
										</div> 
										<button type="submit"  class="btn btn-primary"> Eregistrer</button>
      </form>
                                       
                                         
</div>
									
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
	  </div>
	</div></div></div>
  
<div class="container">
  <div class="row">
    <div class=" W-25 col-3 ">
	<img src="u.png"  alt="Bootstrap" class="img-thumbnail"></div>
	<div class="col-7">
	<label>Nom:   </label>{{$contact->nom}}<br>
	<label>Prenom:   </label>{{$contact->prenom}}<br>
	<label>Fonction:   </label>{{$contact->fonction}}<br>
	<label>Telephone:  </label>{{$contact->telephone}}<br>
	<label>Email:    </label>{{$contact->email}}<br><br>
	
	<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
  Modifier
</button>

</div></div></div>

@endsection					
        