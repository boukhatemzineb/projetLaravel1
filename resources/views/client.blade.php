@extends('administrateur')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
								
									<form>
										<div class="form-group">
											<label>Société</label>
											<input class="form-control form-control-lg" type="text" name="societe" >
										</div>
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" >
										</div>
                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="email" name="adresse" >
										</div>
                                        <div class="form-group">
											<label>Site web</label>
											<input class="form-control form-control-lg" type="url" name="site" >
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