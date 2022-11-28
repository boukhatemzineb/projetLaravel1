@extends('commerciale')
@section('content')
<br>
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  form -->
        <div class="container">
  <div class="row">
    <div class="col">
					<form method="POST" action="{{route('Contact.store')}}">
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
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" required>
										</div> </div><div class="col">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" required>
										</div> 
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" required>
										</div>
                                        <div class="form-group">
											<label>Client</label>
											<input class="form-control form-control-lg" type="text" name="cli" id="cli" value="" required>
                      <select class="form-select" aria-label="Default select example"name="client" id="sel"  required>
                                        
                                            
                                           </select> 
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
                <h2 class="card-title">Contacts</h2>
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
                    <th>Prenom</th>
                    <th>Fonction</th>
                    <th>Email</th>
                    
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $contact)
                  <tr>
                    <td> {{$contact->nom}}</td>
                    
                    <td> {{$contact->prenom}}</td>
                    <td> {{$contact->fonction}}</td>
                    <td> {{$contact->email}}</td>
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="show-contact"
                        data-url="{{route('Contact.show', $contact->id)}}"
                        class="btn btn-info"
                        >Détails</a>
                    
                    </td>
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-contact"
                        data-url="{{ route('Contact.show', $contact->id) }}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                    <form method="POST" action="{{route('Contact.destroy',$contact->id)}}">
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
<div class="modal fade" id="contactShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nom:</strong> <span id="contact-nom"></span></p>
        <p><strong>Prenom:</strong> <span id="contact-prenom"></span></p>
        <p><strong>Fonction:</strong> <span id="contact-fonction"></span></p>
        <p><strong>Email:</strong> <span id="contact-email"></span></p>
        <p><strong>Telephone:</strong> <span id="contact-telephone"></span></p>
        <p><strong>Client:</strong> <span id="contact-client"></span></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>
   <!-- Modal -->
   <div class="modal fade" id="contacteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Contact</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('Contact.update',1)}}">
										@csrf
                    <input type="hidden" name="_method" value="put"/>
                  <input type="number" name="id" id="contactid" value=""style="display:none" >
                  <div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom"id="contactnom" value="" required>
										</div>
										<div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" id="contactprenom" value="" required>
										</div>
                                        <div class="form-group">
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" id="contactfonction" value="" required>
										</div> </div><div class="col">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" id="contactemail" value="" required>
										</div> 
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" id="contacttelephone" value="" required>
										</div>
                                        <div class="form-group">
											<label>Client</label>
											<input class="form-control form-control-lg" type="text" name="client" id="contactclient" value="" required>
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
        
        $('body').on('click', '#show-contact', function () {
          var contactURL = $(this).data('url');
          $.get(contactURL, function (data) {
            $('#contactShowModal').modal('show');
              $('#contact-nom').text(data.nom);
              $('#contact-prenom').text(data.prenom);
              $('#contact-fonction').text(data.fonction);
              $('#contact-email').text(data.email);
              $('#contact-telephone').text(data.telephone);
              $('#contact-client').text(data.client_id);
             
          })
       });
      });  

      $('body').on('click', '#edit-contact', function () {
          var contactURL = $(this).data('url');
          $.get(contactURL, function (data) {
            $('#contacteditModal').modal('show');
            $('#contactid').val(data.id);
              $('#contactnom').val(data.nom);
              $('#contactprenom').val(data.prenom);
              $('#contactfonction').val(data.fonction);
              $('#contactemail').val(data.email);
              $('#contacttelephone').val(data.telephone);
              $('#contactclient').val(data.client_id);
             
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