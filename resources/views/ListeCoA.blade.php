@extends('administrateur')
@section('content')

    <br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <td>nom</td>
                      <td>prenom</td>
                      <td>email</td>
                      <td>pass</td>
                      <td>  <form method="POST">
                        <a class="btn btn-primary" href="{{route('CommercialA.edit',1)}}">Modifier </a>
                              </form> </td>
                      <td> <form method="POST">
                        <a class="btn btn-danger" href="{{route('CommercialA.destroy',1)}}">Supprimer </a>
                              </form> </td>
                  </tbody>
                </table>
             
@endsection