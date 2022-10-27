@extends('administrateur')
@section('content')

    <br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">Société</th>
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
                      <td>  <button type="button" class="btn btn-warning">Modifier</button> </td>
                      <td>  <button type="button" class="btn btn-danger">Supprimer</button> </td>
                  </tbody>
                </table>
             
@endsection