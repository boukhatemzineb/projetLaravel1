@extends('commerciale')
@section('content')

<div class="container">
  <div class="row">
    <div class="col">
								
									<form method="POST" action="{{route('OpportuniteC.store')}}">
										@csrf
										<div class="form-group">
											<label>Nom</label>
											<input class="form-control form-control-lg" type="text" name="nom" required>
										</div>
										<div class="form-group">
											<label>Montant</label>
											<input class="form-control form-control-lg" type="number" name="montant" required>
										</div>
                                        <div class="form-group">
											<label>Etape</label> <br>
											<select class="form-select" aria-label="Default select example" required>
                                            <option value="1">Prospection</option>
                                            <option value="2">Proposition/Devis</option>
                                            <option value="3">Negosiation/Verification</option>
                                            <option value="4">Cloturée/Gagnée</option>
                                            <option value="5">Cloturée/Perdue</option>
                                            
                                           </select>
										</div>   
                                        <div class="form-group">
											<label>Date de cloture</label>
											<input class="form-control form-control-lg" type="date" name="date" required>
										</div>
										<div class="form-group">
											<label>Client</label>
											<input class="form-control form-control-lg" type="text" name="client" required>
										</div> </div> <div class="col" id="con"> 
                                        
										<div class="form-group">
											<label>Nombre de produits</label>
											<input class="form-control form-control-lg" type="number" name="nombre" id="nombre" onKeydown="fonction()" required>
										</div> <br> <br>
										</div>
										</div>
</div>
										<center><div class="text-center mt-3">
											
											 <button type="submit" class="btn btn-lg btn-primary">Enregistrer</button> 
										</div></center>
									</form>
								
                                   

                      

	<script>
		function fonction ()
		{
			var nbr=document.getElementById('nombre').value;
			
			 for(var i=1;i<=nbr;i++){
				
			var pro = document.createElement('input');
             pro.type = 'text';
             pro.id = i;
			 pro.value ='Produit'+i;
			 var q = document.createElement('input');
             q.type = 'number';
             q.id = 'q'+i;
			 q.value='0';
			 var br = document.createElement('br');
			 var con = document.getElementById('con');
             con.appendChild(pro);
			 con.appendChild(q);
			 con.appendChild(br);
			 con.appendChild(br);
			 
			 }
			 
		}
	</script>				

	

@endsection