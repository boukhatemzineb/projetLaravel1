<html>
<head>
<title>Administrateur</title>
<link rel="icon" type="image/jfif" href="logo.jfif" />
@vite(['resources/js/app.js'])
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <br><br>
     <center><h1> Détails du client </h1></center>

    <FONT size="5pt"> <p>  <B> Sociéte :</B>  {{$client->societe}} </p> </FONT>
    <FONT size="5pt"> <p>  <B> Téléphone : </B> {{$client->telephone}} </p> </FONT>
  
    <FONT size="5pt"> <p>  <B> Adresse : </B> {{$client->adresse}} </p> </FONT>
    <FONT size="5pt"> <p>  <B> Site web : </B>  {{$client->site}} </p> </FONT>
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Ajouter
</button> <br>
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
        
								
									<form method="GET" action="{{route('ajouterC')}}">
										@csrf
                    <input type="number" name="id" value="{{$client->id}}"style="display:none" >
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
										</div> 
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" required>
										</div> 
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" required>
										</div>
                    
										<center><div class="text-center mt-3">
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div></center>
									</form>
	
                                    <!-- fin -->
</div></div>
  </div>
</div> </div>
    <br>
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
                    <th>Téléphone</th>
                    
                    
                    
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
                    <td> {{$contact->telephone}}</td>
                   
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-contact"
                        data-url="{{route('edit2',['id'=>$contact->id])}}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                      
                    <form method="GET" action="{{route('supprimer1')}}">
                      
                      @csrf
                      
                      <input type="number" name="id" value="{{$contact->id}}" style="display:none" >
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




          <div class="modal fade" id="contacteditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier un Contact </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="GET" action="{{route('modifier1')}}">
										@csrf
                    
                  <input type="number" name="id" id="id" value="" style="display:none">
                  
                                       <div class="form-group">
                                       <label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom"  id="clientnom" value="" required>
										</div>
										<div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" id="clientprenom" value="" required>
										</div>
                                        <div class="form-group">
											<label>Fonction</label>
											<input class="form-control form-control-lg" type="text" name="fonction" id="clientfonction" value=""required>
										</div> 
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" id="clientemail" value=""required>
										</div> 
                                        <div class="form-group">
											<label>Téléphone</label>
											<input class="form-control form-control-lg" type="text" name="telephone" id="clienttelephone" value=""required>
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
<br> <br><br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
 Ajouter
</button> <br> <br>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une Opportunite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  form -->
        
								
									<form method="GET" action="{{route('ajouterO')}}">
										@csrf
                    <input type="number" name="id" value="{{$client->id}}"style="display:none" >
                    <div class="form-group">
											
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
										</div>
                                        <div class="form-group">
											<label>Date de cloture</label>
											<input class="form-control form-control-lg" type="date" name="date" required>
										</div>
										<center><div class="text-center mt-3">
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div></center>
									</form>
	
                                    <!-- fin -->
</div></div>
  </div>
</div> </div>
<div class="card col-sm-10">
              <div class="card-header border-0">
                <h2 class="card-title">Opportunites</h2>
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
                    <th>Date de cloture</th>
                    
                    
                    
                    
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($opportunites as $opportunite)
                  <tr>
                    <td> {{$opportunite->nom}}</td>
                    
                    <td> {{$opportunite->etape}}</td>
                    
                    <td> {{$opportunite->date}}</td>
                    
                   
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-opportunite"
                        data-url="{{route('OpportuniteA.edit',$opportunite->id)}}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                      
                    <form method="GET" action="{{route('supprimer2')}}">
                      
                      @csrf
                      
                      <input type="number" name="ido" value="{{$opportunite->id}}" style="display:none" >
                      <input type="number" name="idc" value="{{$client->id}}" style="display:none" >
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
          <br><br>
<a type="button" style="align=right"  class="btn btn-secondary" href="{{route('ClientA.index')}}" >&lt;-- Clients</a>

          <div class="modal fade" id="opportuniteeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier une Opportunite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="GET" action="{{route('modifier2')}}">
										@csrf
                   <input type="number" name="client"  value="{{$client->id}}" style="display:none" >
                  <input type="number" name="id" id="idp" value="" style="display:none" >
                  
                  <div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" id="opportunitenom" value="" required>
										</div>
										
                                        <div class="form-group">
											<label>Etape</label> <br>
											<select class="form-select" aria-label="Default select example"name="etape" id="opportuniteetape" value=""  required>
                                            <option value="Prospection">Prospection</option>
                                            <option value="Proposition/Devis">Proposition/Devis</option>
                                            <option value="Negosiation/Verification">Negosiation/Verification</option>
                                            <option value="Cloturée/Gagnée">Cloturée/Gagnée</option>
                                            <option value="Cloturée/Perdue">Cloturée/Perdue</option>
                                            
                                           </select>
										</div>
                                        <div class="form-group">
											<label>Date de cloture</label>
											<input class="form-control form-control-lg" type="date" name="date"id="opportunitedate" value=""  required>
										</div>
										<center><div class="text-center mt-3">
											
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div></center>
									</form>
								
</div>                          
</div>
</div> 

<script type="text/javascript">
      

      $('body').on('click', '#edit-contact', function () {
        
          var contactURL = $(this).data('url');
          $.get(contactURL, function (data) {
            $('#contacteditModal').modal('show');
            $('#id').val(data.id);
            $('#clientnom').val(data.nom);
            $('#clientprenom').val(data.prenom);
            $('#clientfonction').val(data.fonction);
            $('#clientemail').val(data.email);
            $('#clienttelephone').val(data.telephone);  
          })
       });

       $('body').on('click', '#edit-opportunite', function () {
        
        var opportuniteURL = $(this).data('url');
        $.get(opportuniteURL, function (data) {
          $('#opportuniteeditModal').modal('show');
          $('#idp').val(data.id);
          $('#opportunitenom').val(data.nom);
          $('#opportuniteetape').val(data.etape);
          $('#opportunitedate').val(data.date);
            
        })
     });
       </script>
</body>
</html>
