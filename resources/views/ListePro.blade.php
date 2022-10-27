@extends('administrateur')
@section('content')

    <br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">Nom</th>
                      <th>Prenom</th>
                      <th>Sociéte</th>
                      <th>Fonction</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <td>Nom</td>
                      <td>Prenom</td>
                      <td>Sociéte</td>
                      <td>Fonction</td>
                      <td> <button type="button" class="btn btn-info">Détails</button></td>
                      <td>  <button type="button" class="btn btn-warning">Modifier</button> </td>
                      <td>  <button type="button" class="btn btn-danger">Supprimer</button> </td>
                      <td> <button type="button" class="btn btn-success">Transformer</button> </td>
                  </tbody>
                </table>
             
@endsection