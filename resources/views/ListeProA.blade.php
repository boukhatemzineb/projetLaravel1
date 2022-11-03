@extends('administrateur')
@section('content')
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
                  <tr>
                    <td></td>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    

                    <td>
                      <form method="POST">
                        <a class="btn btn-info" href="{{route('ProspectA.show',1)}}">Détails </a>
                              </form>
                    </td>
                    <td>
                    <form method="POST">
                        <a class="btn btn-primary" href="{{route('ProspectA.edit',1)}}">Modifier </a>
                              </form>
                    </td>

                    <td> 
                    <form method="POST">
                        <a class="btn btn-danger" href="{{route('ProspectA.destroy',1)}}">Supprimer </a>
                              </form>
                       </td>
                  </tr>
                  
                    
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
@endsection