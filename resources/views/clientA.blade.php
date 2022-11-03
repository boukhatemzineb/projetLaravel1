@extends('administrateur')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('ClientA.store')}}">
										@csrf
										<div class="form-group">
											<label>Société</label>
											<input class="form-control form-control-lg" type="text" name="societe" required>
										</div>
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" required>
										</div></div><div class="col">

                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="text" name="adresse" required>
										</div>
                                        <div class="form-group">
											<label>Site web</label>
											<input class="form-control form-control-lg" type="url" name="site" required>
										</div>
                                         
                                         <br>
										<div class="text-center mt-3">
										
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div>
									</form>
								
                                   

</div>  
                              
</div>
</div>
					

@endsection