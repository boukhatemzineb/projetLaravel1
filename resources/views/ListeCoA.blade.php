@extends('administrateur')
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Commerciale</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--  form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('CommercialA.store')}}">
										@csrf
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
                                        <div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" required>
										</div></div><div class="col">
 
                                        <div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" required>
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
                <h2 class="card-title">Commerciales</h2>
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
                    <th>Email</th>
                    
                    
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($commerciales as $commerciale)
                  <tr>
                    <td> {{$commerciale->nom}}</td>
                    
                    <td> {{$commerciale->prenom}}</td>
                    <td> {{$commerciale->email}}</td>
                   
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="show-commerciale"
                        data-url="{{route('CommercialA.show', $commerciale->id)}}"
                        class="btn btn-info"
                        >Détails</a>
                    
                    </td>
                    
                    <td>
                    <a 
                        href="javascript:void(0)"
                        id="edit-commerciale"
                        data-url="{{ route('CommercialA.show', $commerciale->id) }}"
                        class="btn btn-warning"
                        >Modifier</a>
                    
                    </td>

                    <td> 
                    <form method="POST" action="{{route('CommercialA.destroy',$commerciale->id)}}">
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
<div class="modal fade" id="commercialeShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détails Commerciale</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nom:</strong> <span id="commerciale-nom"></span></p>
        <p><strong>Prenom:</strong> <span id="commerciale-prenom"></span></p>
        <p><strong>Email:</strong> <span id="commerciale-email"></span></p>
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</div>
   <!-- Modal -->
   <div class="modal fade" id="commercialeeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Commerciale</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('CommercialA.update',1)}}">
										@csrf
                    <input type="hidden" name="_method" value="put"/>
                  <input type="number" name="id" id="commercialeid" value=""style="display:none" >
										
                  <div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" id="commercialenom" value=""required>
										</div>
                                        <div class="form-group">
											<label>Prénom</label>
											<input class="form-control form-control-lg" type="text" name="prenom" id="commercialeprenom" value=""required>
										</div></div><div class="col">
 
                                        <div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" id="commercialeemail" value=""required>
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
        
        $('body').on('click', '#show-commerciale', function () {
          var commercialeURL = $(this).data('url');
          $.get(commercialeURL, function (data) {
            $('#commercialeShowModal').modal('show');
              $('#commerciale-nom').text(data.nom);
              $('#commerciale-prenom').text(data.prenom);
              $('#commerciale-email').text(data.email);
              
             
          })
       });
      });  

      $('body').on('click', '#edit-commerciale', function () {
          var commercialeURL = $(this).data('url');
          $.get(commercialeURL, function (data) {
            $('#commercialeeditModal').modal('show');
            $('#commercialeid').val(data.id);
              $('#commercialenom').val(data.nom);
              $('#commercialeprenom').val(data.prenom);
              $('#commercialeemail').val(data.email);
             
             
          })
       });
       
      
          
</script>
   
@endsection