
	
@extends('administrateur')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
	 /*il faut ajouter dans action {{ action('App\Http\Controllers\EtudiantController@ajouterprospectA') }}" */
									<form method="POST" action="{{route('ProspectA.store')}}">
									@csrf
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
										<div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" required>
										</div>
                                        <div class="form-group">
											<label>Société</label>
											<input class="form-control form-control-lg" type="text" name="societe" required>
										</div>
                                        <div class="form-group">
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" required>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" required>
										</div> </div>
                                        <div class="col">
										<div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" required>
										</div>
                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="text" name="adresse" required>
										</div>
                                        <div class="form-group">
											<label>Site web</label>
											<input class="form-control form-control-lg" type="url" value="http://" name="site" required>
										</div>
                                        <div class="form-group">
											<label>Statut</label> <br>
											<select class="form-select" aria-label="Default select example"required>
                                            <option value="1">chaud</option>
                                            <option value="2">froid</option>
                                           </select>
										</div><br>
                                        <div class="form-group">
											<label>Source</label> <br>
											<select class="form-select" aria-label="Default select example" required>
                                            <option value="1">Web</option>
                                            <option value="2">Télephone</option>
                                            <option value="3">Partenaire</option>
                                            <option value="4">Salon</option>
                                            <option value="5">Bouche à oreille</option>
                                            <option value="6">Liste prospects</option>
                                            <option value="7">Autre</option>
                                           </select>
										</div> <br>
										<div class="text-center mt-3">
											
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div>
									</form>
								
                                    </div>

                                    
</div>
</div>
					

@endsection
