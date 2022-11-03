@extends('administrateur')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
								  
									<form method="POST" action="{{route('ProduitA.store')}}">
										@csrf
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
										<div class="mb-3">
                                     <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" id="example" rows="3" required></textarea>
</div>  
<div class="form-group">
											<label>Prix</label>
											<input class="form-control form-control-lg" type="number" name="prix" required>
										</div> </div><div class="col">

                                        <div class="form-group">
											<label>Quantité</label>
											<input class="form-control form-control-lg" type="number" name="quantite" required>
										</div>           
                                        <div class="mb-3">
  <label for="formFile" class="form-label">Choisir une image</label>
  <input class="form-control" type="file" id="formFile" required>
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