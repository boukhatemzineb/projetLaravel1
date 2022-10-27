@extends('administrateur')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
								
									<form>
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" >
										</div>
                                        <div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" >
										</div>
                                        <div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" >
										</div>
                                        <div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="text" name="password" >
										</div>
                                         
                                         <br>
										<div class="text-center mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Enregistrer</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								
                                   

</div>  
<div class="col">
</div>                              
</div>
</div>
					

@endsection