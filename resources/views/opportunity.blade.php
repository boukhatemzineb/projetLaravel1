@extends('client')
@section('oper')
<div class="card col-sm-10">
              <div class="card-header border-0">
                <h2 class="card-title">Products</h2>
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
                    <th>client</th>
                    <th>produits</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
<img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      RENAULT
                    </td>
                    <td>150 M dz</td>
                    <td>1</td>
                    <td>02/11/2022</td>
                    <td>
                      mohammed
                    </td>
                    <td>
                      citroen
                    </td>
                    <td>
                    <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                    </td>
                  </tr>
                  
                    
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          @endsection