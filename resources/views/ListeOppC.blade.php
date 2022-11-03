@extends("commerciale")
@section("content")
<br><br>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Montant</th>
                      <th>Etape</th>
                      <th>Date_de_Cloture</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>  <form method="POST">
                        <a class="btn btn-primary" href="{{route('OpportuniteC.edit',1)}}">Modifier </a>
                              </form> </td>
                      <td>  <form method="POST">
                        <a class="btn btn-danger" href="{{route('OpportuniteC.destroy',1)}}">Supprimer </a>
                              </form> </td>
                  </tbody>
                </table>
             
@endsection