@extends('administrateur')
@section('content')
<br>
  <a href="{{route('contactA')}}"><button type="button" class="btn btn-primary">Ajouter</button></a>
  <br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">Nom</th>
                      <th>Prenom</th>
                      <th>Fonction</th>
                      <th>Email</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                      <td>nom</td>
                      <td>prenom</td>
                      <td>fonction</td>
                      <td>email</td>
                      <td> <form method="POST">
                        <a class="btn btn-info" href="{{route('ContactA.show',1)}}">Détails </a>
                              </form></td>
                      <td> <form method="POST">
                        <a class="btn btn-primary" href="{{route('ContactA.edit',1)}}">Modifier </a>
                              </form> </td>
                      <td>  <form method="POST">
                        <a class="btn btn-danger" href="{{route('ProspectA.destroy',1)}}">Supprimer </a>
                              </form> </td>
                      
                  </tbody>
                </table>
             
@endsection