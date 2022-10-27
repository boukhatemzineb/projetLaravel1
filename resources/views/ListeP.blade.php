@extends('administrateur')
@section('content')

    <br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">Image</th>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Quantité</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <td>image</td>
                      <td>nom</td>
                      <td>description</td>
                      <td>prix</td>
                      <td>quantité</td>
                      <td>  <button type="button" class="btn btn-warning">Modifier</button> </td>
                  </tbody>
                </table>
             
@endsection