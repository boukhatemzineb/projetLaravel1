@extends('commerciale')
@section('content')
@vite(['resources/js/app.js'])
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<br><br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Ajouter
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Prospect</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  form -->
      <div class="container">
  <div class="row">
    <div class="col">

									<form method="POST" action="{{route('ProspectC.store')}}">
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
											<select class="form-select" aria-label="Default select example" name="statut"required>
                                            <option value="chaud">chaud</option>
                                            <option value="froid">froid</option>
                                           </select>
										</div><br>
                                        <div class="form-group">
											<label>Source</label> <br>
											<select class="form-select" aria-label="Default select example"name="source" required>
                                            <option value="web">Web</option>
                                            <option value="telephone">Télephone</option>
                                            <option value="partenaire">Partenaire</option>
                                            <option value="salon">Salon</option>
                                            <option value="bouche a oreille">Bouche à oreille</option>
                                            <option value="liste prospects">Liste prospects</option>
                                            <option value="7">Autre</option>
                                           </select>
										</div> <br>
										<div class="text-center mt-3">
											
                    <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div>
									</form>
								
                                    </div> </div> </div>
                                    <!-- fin -->
      </div>
      
    </div>
  </div>
</div>

<br><br>
<div class="card col-sm-10">
              <div class="card-header border-0">
                <h2 class="card-title">Prospects</h2>
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
                    <th>Prénom</th>
                    <th>Société</th>
                    <th>Fonction</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($prospects as $prospect)
                  <tr>
                    <td> {{$prospect->nom}}</td>
                    
                    <td> {{$prospect->prenom}}</td>
                    <td> {{$prospect->societe}}</td>
                    <td> {{$prospect->fonction}}</td>
                    

                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="show-prospect"
                        data-url="{{ route('ProspectC.show', $prospect->id) }}"
                        class="btn btn-info"
                        >Détails</a>
                    </td>
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-prospect"
                        data-url="{{ route('ProspectC.show', $prospect->id) }}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                    <form method="POST" action="{{route('ProspectC.destroy',$prospect->id)}}">
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
<div class="modal fade" id="prospectShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails Prospect</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nom:</strong> <span id="prospect-nom"></span></p>
        <p><strong>Prenom:</strong> <span id="prospect-prenom"></span></p>
        <p><strong>Société:</strong> <span id="prospect-societe"></span></p>
        <p><strong>Fonction:</strong> <span id="prospect-fonction"></span></p>
        <p><strong>Email:</strong> <span id="prospect-email"></span></p>
        <p><strong>Telephone:</strong> <span id="prospect-telephone"></span></p>
        <p><strong>Adresse:</strong> <span id="prospect-adresse"></span></p>
        <p><strong>Site web:</strong> <span id="prospect-site"></span></p>
        <p><strong>Statut:</strong> <span id="prospect-statut"></span></p>
        <p><strong>Source:</strong> <span id="prospect-source"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>
   <!-- Modal -->
   <div class="modal fade" id="prospecteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Prospect</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
        
  <div class="row">
    <div class="col">
   
									<form method="POST" action="{{route('ProspectC.update',1)}}">
									@csrf
                  <input type="hidden" name="_method" value="put"/>
                  <input type="number" name="id" id="prospectid" value=""style="display:none" >
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" id="prospectnom" value="" required>
										</div>
										<div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" id="prospectprenom" value=""required>
										</div>
                                        <div class="form-group">
											<label>Société</label>
											<input class="form-control form-control-lg" type="text" name="societe" id="prospectsociete" value="" required>
										</div>
                                        <div class="form-group">
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" id="prospectfonction" value=""required>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" id="prospectemail" value=""required>
										</div> </div>
                                        <div class="col">
										<div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" id="prospecttelephone" value=""required>
										</div>
                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="text" name="adresse" id="prospectadresse" value="" required>
										</div>
                                        <div class="form-group">
											<label>Site web</label>
											<input class="form-control form-control-lg" type="url" value="http://" name="site" id="prospectsite" value=""required>
										</div>
                                        <div class="form-group">
											<label>Statut</label> <br>
											<select class="form-select" aria-label="Default select example" name="statut" id="prospectstatut" value=""required>
                                            <option value="chaud">chaud</option>
                                            <option value="froid">froid</option>
                                           </select>
										</div><br>
                                        <div class="form-group">
											<label>Source</label> <br>
											<select class="form-select" aria-label="Default select example"name="source"id="prospectsource" value="" required>
                                            <option value="web">Web</option>
                                            <option value="telephone">Télephone</option>
                                            <option value="partenaire">Partenaire</option>
                                            <option value="salon">Salon</option>
                                            <option value="bouche a oreille">Bouche à oreille</option>
                                            <option value="liste prospects">Liste prospects</option>
                                            <option value="7">Autre</option>
                                           </select>
										</div> <br>
										<div class="text-center mt-3">
                    <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div>
									</form>
								
                                    </div> </div> </div>
      
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
        
        $('body').on('click', '#show-prospect', function () {
          var prospectURL = $(this).data('url');
          $.get(prospectURL, function (data) {
            $('#prospectShowModal').modal('show');
              $('#prospect-nom').text(data.nom);
              $('#prospect-prenom').text(data.prenom);
              $('#prospect-societe').text(data.societe);
              $('#prospect-fonction').text(data.fonction);
              $('#prospect-email').text(data.email);
              $('#prospect-telephone').text(data.telephone);
              $('#prospect-adresse').text(data.adresse);
              $('#prospect-site').text(data.site);
              $('#prospect-statut').text(data.statut);
              $('#prospect-source').text(data.source);
             
          })
       });
      });  
   
      $(document).ready(function () {
        
        $('body').on('click', '#edit-prospect', function () {
          var prospectURL = $(this).data('url');
          $.get(prospectURL, function (data) {
            $('#prospecteditModal').modal('show');
            $('#prospectid').val(data.id);
              $('#prospectnom').val(data.nom);
              $('#prospectprenom').val(data.prenom);
              $('#prospectsociete').val(data.societe);
              $('#prospectfonction').val(data.fonction);
              $('#prospectemail').val(data.email);
              $('#prospecttelephone').val(data.telephone);
              $('#prospectadresse').val(data.adresse);
              $('#prospectsite').val(data.site);
              $('#prospectstatut').val(data.statut);
              $('#prospectsource').val(data.source);
             
          })
       });
      });  
        
          
</script>
@endsection