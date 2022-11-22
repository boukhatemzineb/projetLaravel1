@extends('C_client')
@section('oper')

<div class="card col-sm-12">
              <div class="card-header border-0">
                <h2 class="card-title">Mes Produit</h2>
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
                    <th>NomProduit : </th>
                  
                    <th>Quantite</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($produits as $produit)
                  <tr>
                    <td>{{$produit->nom}}</td>
                    <td>{{$produit->quantite}}</td>
                    
                  </tr>
              @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
     @endsection     