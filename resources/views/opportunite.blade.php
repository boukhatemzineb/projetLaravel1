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
											<label>Montant</label>
											<input class="form-control form-control-lg" type="number" name="montant" >
										</div>
                                        <div class="form-group">
											<label>Etape</label> <br>
											<select class="form-select" aria-label="Default select example">
                                            <option value="1">Prospection</option>
                                            <option value="2">Proposition/Devis</option>
                                            <option value="3">Negosiation/Verification</option>
                                            <option value="4">Cloturée/Gagnée</option>
                                            <option value="5">Cloturée/Perdue</option>
                                            
                                           </select>
										</div>
                                        <div class="form-group">
											<label>Date de cloture</label>
											<input class="form-control form-control-lg" type="date" name="date" >
										</div>
										<div class="form-group">
											<label>Client</label>
											<input class="form-control form-control-lg" type="text" name="client" >
										</div> 
                                        <br>
                                        
										<div class="text-center mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Enregistrer</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								
                                    </div>

           <div class="col"></div>                          
</div>
</div>
					

@endsection