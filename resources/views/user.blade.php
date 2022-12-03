
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact</title>
        <!-- Favicon-->
        <link rel="icon"/>
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        


        <link href="css/styles.css" rel="stylesheet" />
       
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-dark"class="img-circle elevation-2" href="#page-top"><img src="" >Nom Prenom</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item "><a class="nav-link text-dark"  href="{{route('ContactM.index')}}"> Compte</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{route('opper',['id'=>1])}}">Mes Oppertunite</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <br><br><br>
        <div class="container ">
        <div class="text-bg-light p-3">
        <div class="card col-sm-12">
              <div class="card-header border-0">
                <h2 class="card-title">Mes Opertunity</h2>
                <div class="card-tools">
                 
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table  class="table table-striped table-valign-middle">
                 
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Montant</th>
                    <th>Etape</th>
                    <th>date de cloture</th>
                    <th>client </th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($opportunites as $opportunite)

<tr>
  <td> {{$opportunite->nom}}</td>
  <td>{{$opportunite->montant}}</td>
  <td>{{$opportunite->etape}}</td>
  <td>{{$opportunite->date}}</td>
  <td></td>
  
  <td></td>
  <td>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Detail
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="{{route('affpr',['id'=>$opportunite->id])}}">Produit</a></li>
      <li><a class="dropdown-item" href="{{route('afficherevent',['id'=>$client->id])}}">Event</a></li>
    </ul>
  </div>
  </td>
  <td><button type="button" class="btn btn-warning btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal">
facture
</button></td>
 
</tr> @endforeach</tbody>
                 
 <br><br>
</tr>  </tbody>
                  </table>

              </div>
            </div>
            <!-- /.card -->
          </div>

        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Facture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div  class="modal-body ">
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
      <div class="card-body">
<table  id="example1" class="table table-bordered table-striped .d-print-table-cell">
  <tbody>
    <tr>
      <td>nom:boukhtem</td>
      <td>N:00001</td>
</tr>
<tr>
      <td>prenom :zineb</td>
      <td >date:22/11</td>
</tr>
 <br><br>
    
        <table id="example1"  class="table">
  <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Produits</th>
      <th scope="col">PrixUnitaire</th>
      <th scope="col">Quantite</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>1</td>
      <td>citroen c4</td>
      <td>300.000.000</td>
      <td>1</td>
      <td></td>
    </tr>
    <tr>
    <td>2</td>
      <td>citroen c3</td>
      <td>250.000.000</td>
      <td>2</td>
      <td></td>
    </tr>
    <tr>
    <td>PrixTotale</td>
      <td></td>
      <td></td>
      <td></td>
      <td>800.000.000</td>
    </tr>
   
  </tbody>
</tbody>
</table></div>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>     
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
      </div></form>
	  </div></div></div>   
</html