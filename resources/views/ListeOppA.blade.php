@extends("administrateur")
@section("content")

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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Opportunite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('OpportuniteA.store')}}">
										@csrf
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
										
                                        <div class="form-group">
											<label>Etape</label> <br>
											<select class="form-select" aria-label="Default select example"name="etape" required>
                                            <option value="Prospection">Prospection</option>
                                            <option value="Proposition/Devis">Proposition/Devis</option>
                                            <option value="Negosiation/Verification">Negosiation/Verification</option>
                                            <option value="Cloturée/Gagnée">Cloturée/Gagnée</option>
                                            <option value="Cloturée/Perdue">Cloturée/Perdue</option>
                                            
                                           </select>
										</div></div><div class="col">
                                        <div class="form-group">
											<label>Date de cloture</label>
											<input class="form-control form-control-lg" type="date" name="date" required>
										</div>
										<div class="form-group">
											<label>Client</label>
											<input class="form-control form-control-lg" type="text" value=""name="cli"  id="cli" required>
                      <select class="form-select" aria-label="Default select example"name="client" id="sel"  required>
                                        
                                            
                                           </select> 
										</div> 
                  </div> 
                                        
										
										

										<center><div class="text-center mt-3">
											
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div></center>
									</form>
								
                                   
</div></div>
                      

	
                                    <!-- fin -->
</div></div>
      
   
  </div>
</div>

<br><br>
<div class="card col-sm-10">
              <div class="card-header border-0">
                <h2 class="card-title">Opportunités</h2>
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
                    <th>Etape</th>
                    <th>Client</th>
                    <th>Date de cloture</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($opportunites as $opportunite)
                  <tr>
                    <td> {{$opportunite->nom}}</td>
                    
                    <td> {{$opportunite->etape}}</td>
                    <td> {{$opportunite->societe}}</td>
                    <td> {{$opportunite->date}}</td>
                    
                    <td>
                    
                    <a 
                        href="{{ route('OpportuniteA.show', $opportunite->id) }}"
                        
                        
                        class="btn btn-info"
                        >Détails</a>
                    </td>
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-opportunite"
                        data-url="{{ route('OpportuniteA.edit', $opportunite->id) }}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                    <form method="POST" action="{{route('OpportuniteA.destroy',$opportunite->id)}}">
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
   <div class="modal fade" id="opportuniteShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails de l'opportunite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nom:</strong> <span id="opportunite-nom"></span></p>
        <p><strong>Etape:</strong> <span id="opportunite-etape"></span></p>
        <p><strong>Date de cloture:</strong> <span id="opportunite-date"></span></p>
        <p><strong>Client:</strong> <span id="opportunite-client"></span></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>




   <!-- Modal -->
   <div class="modal fade" id="opportuniteeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier L'opportunite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('OpportuniteA.update',1)}}">
										@csrf
                    <input type="hidden" name="_method" value="put"/>
                  <input type="number" name="id" id="opportuniteid" value=""style="display:none" >
                  <div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" id="opportunitenom" value="" required>
										</div>
										
                                        <div class="form-group">
											<label>Etape</label> <br>
											<select class="form-select" aria-label="Default select example"name="etape"id="opportuniteetape" value="" required>
                                            <option value="Prospection">Prospection</option>
                                            <option value="Proposition/Devis">Proposition/Devis</option>
                                            <option value="Negosiation/Verification">Negosiation/Verification</option>
                                            <option value="Cloturée/Gagnée">Cloturée/Gagnée</option>
                                            <option value="Cloturée/Perdue">Cloturée/Perdue</option>
                                            
                                           </select>
										</div></div><div class="col">
                                        <div class="form-group">
											<label>Date de cloture</label>
											<input class="form-control form-control-lg" type="date" name="date"id="opportunitedate" value="" required>
										</div>
										<div class="form-group">
											<label>Client</label>
											<input class="form-control form-control-lg" type="text" name="client"id="opportuniteclient" value="" required>
										</div> 
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
<script type="text/javascript">
      $('body').on('click', '#show-opportunite', function () {
          var opportuniteURL = $(this).data('url');
          $.get(opportuniteURL, function (data) {
            $('#opportuniteShowModal').modal('show');
            $('#opportunite-nom').text(data.nom);
            $('#opportunite-etape').text(data.etape);
            $('#opportunite-date').text(data.date);
            $('#opportunite-client').text(data.societe);
              
             
          })
       });

      $('body').on('click', '#edit-opportunite', function () {
          var opportuniteURL = $(this).data('url');
          $.get(opportuniteURL, function (data) {
            $('#opportuniteeditModal').modal('show');
            $('#opportuniteid').val(data.id);
            $('#opportunitenom').val(data.nom);
            $('#opportuniteetape').val(data.etape);
            $('#opportunitedate').val(data.date);
            $('#opportuniteclient').val(data.societe);
              
             
          })
       });
       
       $('#cli').keydown( function() {
        $('#sel').empty();
        var select=document.getElementById("sel");
        
          
        var _token=$("input[name='_token']").val();
        var _char=$("input[name='cli']").val();
          $.ajax({
          method:"POST",
        url:"{{route('ajax')}}",  
          
        data:{
            
             _token:_token,
             _char:_char
            },  
        dataType: "json",
        success:function(data)   
              {  
                for(let i=0 ;i<data.length;i++ ){
                newOption = new Option (data[i].societe,data[i].societe);
                  select.options.add(newOption);
                }
                
                
              }
              
          });    
      });
          
</script>             

@endsection