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
											<label>Société</label>
											<input class="form-control form-control-lg" type="text" name="societe" >
										</div>
                                        <div class="form-group">
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" >
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" >
										</div> </div>
                                        <div class="col">
										<div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" >
										</div>
                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="text" name="adresse" >
										</div>
                                        <div class="form-group">
											<label>Site web</label>
											<input class="form-control form-control-lg" type="url" value="http://" name="site" >
										</div>
                                        <div class="form-group">
											<label>Statut</label> <br>
											<select class="form-select" aria-label="Default select example">
                                            <option value="1">chaud</option>
                                            <option value="2">froid</option>
                                           </select>
										</div><br>
                                        <div class="form-group">
											<label>Source</label> <br>
											<select class="form-select" aria-label="Default select example">
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
											<a href="index.html" class="btn btn-lg btn-primary">Enregistrer</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								
                                    </div>

                                    
</div>
</div>
					

@endsection