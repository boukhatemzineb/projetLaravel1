@extends('administrateur')
@section('content')

    <br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Société</th>
                      <th>Téléphone</th>
                      <th>Adresse</th>
                      <th>Site web</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <td>Nom</td>
                      <td>Prenom</td>
                      <td>Sociéte</td>
                      <td>Fonction</td>
                      <td>  <form method="POST">
                        <a class="btn btn-primary" href="{{route('ClientA.edit',1)}}">Modifier </a>
                              </form> </td>
                      <td>  <form method="POST">
                        <a class="btn btn-danger" href="{{route('ClientA.destroy',1)}}">Supprimer </a>
                              </form> </td>
                  </tbody>
                </table>
             
@endsection