
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
        <link href="http://localhost/projetLaravel1/public/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-dark" href="#page-top">{{$contact->nom}} {{$contact->prenom}}</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item "><a class="nav-link text-dark"  href="#about"> Compte</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="{{'ContactM.index'}}">Mes Oppertunite</a></li>
                        
                    </ul>
                </div>
            </div>
</nav>
<section style="background-color: #eee;width:100%;">
  <div class="container py-5">
   
<br><br><br><br><br>
    <div class="row">
      <div class="col-lg-3">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{$contact->nom}} {{$contact->prenom}}</h5>
            <p class="text-muted mb-1">Contact</p>
            <p class="text-muted mb-4">sonatrach</p>
            <div class="d-flex justify-content-center mb-2">
            </div>
          </div>
        </div>
<<<<<<< HEAD
=======
      </div>
	  @csrf
	  <input type="hidden" name="_method" value="put"/>
		<div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
			<form method="POST" action="">
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Fonction</p>
              </div>
              <div class="col-sm-9">
			  <input class="form-control form-control-lg" type="text" name="fonction" value="{{$contact->fonction}}" >
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
			  <input class="form-control form-control-lg" type="text" name="fonction" value="{{$contact->telephone}}" >
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
			  <input class="form-control form-control-lg" type="text" name="fonction" value="{{$contact->email}}" >
              </div>
            </div>
            
            <br>
			<button type="button"   class="btn btn-primary "> Modifier </button>
			<form>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		</html>
       
=======
@extends('C_client')
@section('oper')
<!-- Modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title modal-lg" id="exampleModalLabel">Modifier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div>
	  @csrf
	  <input type="hidden" name="_method" value="put"/>
		<div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
			<form method="POST" action="">
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Fonction</p>
              </div>
              <div class="col-sm-9">
			  <input class="form-control form-control-lg" type="text" name="fonction" value="{{$contact->fonction}}" >
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
			  <input class="form-control form-control-lg" type="text" name="fonction" value="{{$contact->telephone}}" >
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
			  <input class="form-control form-control-lg" type="text" name="fonction" value="{{$contact->email}}" >
              </div>
            </div>
            
            <br>
			<button type="button"   class="btn btn-primary "> Modifier </button>
			<form>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		</html>
       
<<<<<<< HEAD
=======
	  </div>
	</div></div></div>
  
<div class="container">
  <div class="row">
    <div class=" W-25 col-3 ">
	<img src="u.png"  alt="Bootstrap" class="img-thumbnail"></div>
	<div class="col-7">
	<label>Nom:   </label>{{$contact->nom}}<br>
	<label>Prenom:   </label>{{$contact->prenom}}<br>
	<label>Fonction:   </label>{{$contact->fonction}}<br>
	<label>Telephone:  </label>{{$contact->telephone}}<br>
	<label>Email:    </label>{{$contact->email}}<br><br>
	
	<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
  Modifier
</button>

</div></div></div>

@endsection					
>>>>>>> 462516b4aa422ba4cfba2ba183dcaecfc8268278
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
        