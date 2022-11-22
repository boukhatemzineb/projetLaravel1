<html>
<head>
<title>Administrateur</title>
<link rel="icon" type="image/jfif" href="logo.jfif" />
@vite(['resources/js/app.js'])
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <br><br>
     <center><h1> Détails de l'opportunité</h1></center>

    <FONT size="5pt"> <p> <B> Nom :</B>  {{$opportunite->nom}} </p> </FONT>
    <FONT size="5pt"> <p>  <B>  Etape: </B>  {{$opportunite->etape}} </p> </FONT>
    <FONT size="5pt"> <p>  <B> Date de cloture : </B> {{$opportunite->date}} </p> </FONT>
    <FONT size="5pt"> <p>  <B>Client : </B>  {{$opportunite->societe}} </p> </FONT>
    
  

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Ajouter
</button> <br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  form -->
        
								
									<form method="GET" action="{{route('ajout')}}">
										@csrf
                    <input type="number" name="id" value="{{$opportunite->id}}"style="display:none" >
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
                    <div class="form-group">
											<label>Quantite</label>
											<input class="form-control form-control-lg" type="number" name="quantite" required>
										</div>
										
                                     
										
                  
                                        
										
										

										<center><div class="text-center mt-3">
											
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div></center>
									</form>
								
                                   

                      

	
                                    <!-- fin -->
</div></div>
      
   
  </div>
</div>
 <br>
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
                    <th>Nom</th>
                    <th>Quantite</th>
                    
                    
                    
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($produits as $produit)
                  <tr>
                    <td> {{$produit->nom}}</td>
                    
                    <td> {{$produit->quantite}}</td>
                    
                    
                   
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-produit"
                        data-url="{{ route('edit', ['ido'=>$opportunite->id,'idp'=>$produit->produit_id]) }}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                      
                    <form method="GET" action="{{route('supprimer')}}">
                      
                      @csrf
                      <input type="number" name="ido" value="{{$opportunite->id}}" style="display:none" >
                      <input type="number" name="idp" value="{{$produit->produit_id}}" style="display:none" >
                        <button type="submit" class="btn btn-danger">Supprimer </button>
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
   <div class="modal fade" id="produiteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier la quantite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="GET" action="{{route('modifier')}}">
										@csrf
                    
                  <input type="number" name="ido" id="ido" value="" style="display:none">
                  <input type="number" name="idp" id="idp" value="" style="display:none">
                  
										
                    <div class="form-group">
											<label>Quantite</label>
											<input class="form-control form-control-lg" type="number" name="quantite" id="produitquantite" value=""required>
										</div>
										
										

										<center><div class="text-center mt-3">
											
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div></center>
									</form>
								
</div>  
                              
</div>
</div>
   
									
      
        <!-- fin form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<a type="button" style="align=right"  class="btn btn-secondary" href="{{route('OpportuniteA.index')}}" >&lt;-- Opportunites</a>

          <script type="text/javascript">
      

      $('body').on('click', '#edit-produit', function () {
          var produitURL = $(this).data('url');
          $.get(produitURL, function (data) {
            $('#produiteditModal').modal('show');
            $('#ido').val(data.opportunite_id);
            $('#idp').val(data.produit_id);
            $('#produitquantite').val(data.quantite);
           
              
             
          })
       });
       
      
          
</script>  
</body>

</html>