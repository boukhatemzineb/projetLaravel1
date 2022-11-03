@extends('administrateur')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('CommercialA.store')}}">
										@csrf
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
                                        <div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" required>
										</div></div><div class="col">
 
                                        <div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" required>
										</div>
                                        <div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="text" name="password" required>
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