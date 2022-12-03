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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('ClientC.store')}}">
										@csrf
										<div class="form-group">
											<label>Société</label>
											<input class="form-control form-control-lg" type="text" name="societe" required>
										</div>
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" required>
										</div></div><div class="col">

                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="text" name="adresse" required>
										</div>
                                        <div class="form-group">
											<label>Site web</label>
											<input class="form-control form-control-lg" type="url" name="site" required>
										</div>
                                         
                                         <br>
										<div class="text-center mt-3">
										
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div>
									</form>
								
                                   

</div>  
                              
</div>
</div>
					

                                    <!-- fin -->
      </div>
      
    </div>
  </div>
</div>

<br><br>
<div class="card col-sm-10">
              <div class="card-header border-0">
                <h2 class="card-title">Clients</h2>
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
                    <th>Société</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Site web</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($clients as $client)
                  <tr>
                    <td> {{$client->societe}}</td>
                    
                    <td> {{$client->telephone}}</td>
                    <td> {{$client->adresse}}</td>
                    <td> {{$client->site}}</td>
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="show-client"
                        data-url="{{route('ClientC.show', $client->id)}}"
                        class="btn btn-info"
                        >Détails</a>
                    
                    </td>
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-client"
                        data-url="{{ route('ClientC.show', $client->id) }}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                    <form method="POST" action="{{route('ClientC.destroy',$client->id)}}">
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
<div class="modal fade" id="clientShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Société:</strong> <span id="client-societe"></span></p>
        <p><strong>Téléphone:</strong> <span id="client-telephone"></span></p>
        <p><strong>Adresse:</strong> <span id="client-adresse"></span></p>
        <p><strong>Site web:</strong> <span id="client-site"></span></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>
   <!-- Modal -->
   <div class="modal fade" id="clienteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('ClientC.update',1)}}">
										@csrf
                    <input type="hidden" name="_method" value="put"/>
                  <input type="number" name="id" id="clientid" value=""style="display:none" >
										<div class="form-group">
											<label>Société</label>
											<input class="form-control form-control-lg" type="text" name="societe" id="clientsociete" value="" required>
										</div>
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" id="clienttelephone" value="" required>
										</div></div><div class="col">

                                        <div class="form-group">
											<label>Adresse</label>
											<input class="form-control form-control-lg" type="text" name="adresse" id="clientadresse" value=""required>
										</div>
                                        <div class="form-group">
											<label>Site web</label>
											<input class="form-control form-control-lg" type="url" name="site"id="clientsite" value="" required>
										</div>
                                         
                                         <br>
										<div class="text-center mt-3">
										
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div>
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
<script type="text/javascript">
    $(document).ready(function () {
        
        $('body').on('click', '#show-client', function () {
          var clientURL = $(this).data('url');
          $.get(clientURL, function (data) {
            $('#clientShowModal').modal('show');
              $('#client-societe').text(data.societe);
              $('#client-telephone').text(data.telephone);
              $('#client-adresse').text(data.adresse);
              $('#client-site').text(data.site);
             
          })
       });
      });  

      $('body').on('click', '#edit-client', function () {
          var clientURL = $(this).data('url');
          $.get(clientURL, function (data) {
            $('#clienteditModal').modal('show');
            $('#clientid').val(data.id);
              $('#clientsociete').val(data.societe);
              $('#clienttelephone').val(data.telephone);
              $('#clientadresse').val(data.adresse);
              $('#clientsite').val(data.site);
             
          })
       });
       
      
          
</script>
             
@endsection