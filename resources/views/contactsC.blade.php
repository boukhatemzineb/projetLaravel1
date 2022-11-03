@extends('commerciale')
@section('content')
<br>
  <a href="{{route('contactC')}}"><button type="button" class="btn btn-primary">Ajouter</button></a>
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
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <td>nom</td>
                      <td>prenom</td>
                      <td>fonction</td>
                      <td>email</td>
                      <td> <form method="POST">
                        <a class="btn btn-info" href="{{route('ContactC.show',1)}}">Détails </a>
                              </form></td>
                      <td> <form method="POST">
                        <a class="btn btn-primary" href="{{route('ContactC.edit',1)}}">Modifier </a>
                              </form> </td>
                      <td>  <form method="POST">
                        <a class="btn btn-danger" href="{{route('ContactC.destroy',1)}}">Supprimer </a>
                              </form> </td>
                      <td> <button type="button" class="btn btn-success">Transformer</button> </td>
                  </tbody>
                </table>
             
@endsection