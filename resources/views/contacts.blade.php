@extends('administrateur')
@section('content')
<br>
  <a href="{{route('contact')}}"><button type="button" class="btn btn-primary">Ajouter</button></a>
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
                      <td> <button type="button" class="btn btn-info">Détails</button></td>
                      <td>  <button type="button" class="btn btn-warning">Modifier</button> </td>
                      <td>  <button type="button" class="btn btn-danger">Supprimer</button> </td>
                      <td> <button type="button" class="btn btn-success">Transformer</button> </td>
                  </tbody>
                </table>
             
@endsection