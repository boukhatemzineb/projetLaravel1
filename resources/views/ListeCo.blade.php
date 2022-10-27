@extends('administrateur')
@section('content')

    <br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">Nom</th>
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
                      <td>  <button type="button" class="btn btn-warning">Modifier</button> </td>
                      <td>  <button type="button" class="btn btn-danger">Supprimer</button> </td>
                  </tbody>
                </table>
             
@endsection