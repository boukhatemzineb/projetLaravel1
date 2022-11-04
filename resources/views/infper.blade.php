@extends('client')
@section('oper')
<div class="container">
  <div class="row">
    <div class="col">

									<form>
                                    <div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" >
										</div>
                                        <div class="form-group">
											<label>Prenom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" >
										</div>
                                        <div class="form-group">
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" >
										</div>
										<div class="form-group">
											<label>Societe</label>
											<input class="form-control form-control-lg" type="text" name="societe" >
										</div>
										<div class="form-group">
											<label>Telephone</label>
											<input class="form-control form-control-lg" type="text" name="tlf" >
										</div>
                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="text" name="adresse" >
										</div>
                                        <div class="form-group">
											<label>site web</label>
											<input class="form-control form-control-lg" type="text" name="site" >
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" >
										</div> 
                                        <div class="form-group">
											<label>mot de passe</label>
											<input class="form-control form-control-lg" type="text" name="mdp" >
										</div>
                                         <br>
                                         <div class="form-group">
										<div class="text-center  mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Modifier</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
                                         -->
                                         <a href="index.html"type="reset" class="btn btn-lg btn-primary">Annuler</a>
										</div>
                                        
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div></div>
									</form>
								
                                    </div>

</div>                               
</div>
</div>
					
         @endsection