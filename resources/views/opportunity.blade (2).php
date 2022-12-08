@extends('user')
@section('oper')
<br>
<div class="card col-sm-10">
              <div class="card-header border-0">
                <h2 class="card-title">Mes Opertunity</h2>
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
                    <th>Montant</th>
                    <th>Etape</th>
                    <th>date de cloture</th>
                    <th>client </th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                   @foreach($opportunites as $opportunite)

                  <tr>
                    <td> {{$opportunite->nom}}</td>
                    <td>{{$opportunite->montant}}</td>
                    <td>{{$opportunite->etape}}</td>
                    <td>{{$opportunite->date}}</td>
                    <td></td>
                    
                    <td></td>
                    <td>
                    <form method="POST">
                    <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Detail
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="{{route('affpr',['id'=>$opportunite->id])}}">Produit</a></li>
      <li><a class="dropdown-item" href="{{route('afficherevent',['id'=>$client->id])}}">Event</a></li>
    </ul>
  </div>
 <a class="btn btn-primary btn-sm" href="{{route('produit')}}"  >Detail </a>
 <a class="btn btn-primary btn-sm" href="{{route('affpr',['id'=>$opportunite->id])}}"  >Detail </a>
 
                              </form>
                    </td>
                    <td><button type="button" class="btn btn-warning btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal">
  facture
</button></td>
                   
                  </tr> </tbody>
                  </tr> @endforeach</tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Modifier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
    <h4>FACTURE</H4> 
    <table class="table">
  
    <tr>
      <td>nom:boukhtem</td>
      <td>N00001</td>
</tr>
<tr>
      <td>prenom :zineb</td>
      <td >date22/11</td>
</tr>
<tr>
      <td>Email:m@yahoo.com</td>
    
</tr>
</table>
   <br><br>
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Produits</th>
      <th scope="col">PrixUnitaire</th>
      <th scope="col">Quantite</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>1</td>
      <td>citroen c4</td>
      <td>300.000.000</td>
      <td>1</td>
      <td></td>
    </tr>
    <tr>
    <td>2</td>
      <td>citroen c3</td>
      <td>250.000.000</td>
      <td>2</td>
      <td></td>
    </tr>
    <tr>
    <td>PrixTotale</td>
      <td></td>
      <td></td>
      <td></td>
      <td>800.000.000</td>
    </tr>
   
  </tbody>
</table>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
      </div></form>
	  </div></div></div>
          @endsection
