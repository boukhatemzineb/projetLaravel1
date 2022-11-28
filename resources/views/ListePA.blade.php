@extends('administrateur')
@section('content')
@vite(['resources/js/app.js'])
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<br><br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ajouter
</button><br><br>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Ajouter produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
       
      <form method="POST" action="{{route('Produit.store')}}" enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
										<div class="mb-3">
                                     <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" id="example" rows="3" required></textarea>
</div>  
<div class="form-group">
											<label>Prix</label>
											<input class="form-control form-control-lg" type="number" name="prix" required>
										</div> 

                                        <div class="form-group">
											<label>Quantité</label>
											<input class="form-control form-control-lg" type="number" name="quantite" required>
										</div>           
                                        <div class="mb-3">
  <label for="formFile" class="form-label">Choisir une image</label>
  <input class="form-control" type="file" name="image"id="formFile" required>
</div>
                                         <br>
	<div class="text-center mt-3">
											
	 <button type="submit" name="" class="btn btn-lg btn-primary">Enregistrer</button> 
					</div>
									</form>
                  </div>
      
      </div>
    </div>
  </div><br>
<div class="card col-sm-10">
              <div class="card-header border-0">
                <h2 class="card-title">Produits</h2>
                <div class="card-tools">
                 
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>image</th>
                    <th>Nom</th>
                   
                    <th>prix</th>
                    <th>Quantite</th>
                    
                    <th> </th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($produits as $produit)

                  <tr>
                    <td><img src="public/{{$produit->image}}" width="200" height="100"/></td>
                    
                    <td>{{$produit->nom}}</td>
                   
                    <td>{{$produit->prix}}</td>
                    <td>{{$produit->quantite}}</td>
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-produit"
                        data-url="{{ route('Produit.show', $produit->id) }}"
                        class="btn btn-warning"
                        >Modifier</a>
                    </td>

                    <td> 
                    <form method="POST" action="{{route('Produit.destroy',$produit->id)}}">
                      @method('DELETE')
                      @csrf
                        <button  class="btn btn-danger">Supprimer </button>
                              </form>
                       </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- Modal -->


                  <!-- Modal -->
   <div class="modal fade" id="produiteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        
   
									<form method="POST" action="{{route('Produit.update',1)}}">
									@csrf
                  <input type="hidden" name="_method" value="put"/>
                  <input type="number" name="id" id="produitid" value=""style="display:none" >
                  <div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" id="produitnom" value="" required>
										</div>
										<div class="mb-3">
                                     <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea name="description"id="produitdescription" value="" class="form-control" id="example" rows="3" required></textarea>
</div>  
<div class="form-group">
											<label>Prix</label>
											<input class="form-control form-control-lg" type="number" name="prix" id="produitprix" value="" required>
										</div> 

                                        <div class="form-group">
											<label>Quantité</label>
											<input class="form-control form-control-lg" type="number" name="quantite"id="produitquantite" value="" required>
										</div>           
                                        
	<div class="text-center mt-3">
											
	 <button type="submit" name="" class="btn btn-lg btn-primary">Enregistrer</button> 
					</div>
									</form>
                                    
      
        <!-- fin form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
      $(document).ready(function () {
        $('body').on('click', '#edit-produit', function () {
          var produitURL = $(this).data('url');
          $.get(produitURL, function (data) {
            $('#produiteditModal').modal('show');
            $('#produitid').val(data.id);
              $('#produitnom').val(data.nom);
              $('#produitdescription').val(data.description);
              $('#produitprix').val(data.prix);
              $('#produitquantite').val(data.quantite); 
          })
       });
      });  
        
          
</script>
@endsection