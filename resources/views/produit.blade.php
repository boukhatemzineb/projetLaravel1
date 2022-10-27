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
										<div class="mb-3">
                                     <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea class="form-control" id="example" rows="3"></textarea>
</div>  
<div class="form-group">
											<label>Prix</label>
											<input class="form-control form-control-lg" type="number" name="prix" >
										</div>
                                        <div class="form-group">
											<label>Quantité</label>
											<input class="form-control form-control-lg" type="number" name="quantite" >
										</div>           
                                        <div class="mb-3">
  <label for="formFile" class="form-label">Choisir une image</label>
  <input class="form-control" type="file" id="formFile">
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