<<<<<<< HEAD

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
                <a class="navbar-brand text-dark" href="#page-top">Nom Prenom</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item "><a class="nav-link text-dark"  href="#about"> Compte</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#services">Mes Oppertunite</a></li>
                        
                    </ul>
                </div>
            </div>
</nav>

<div class="card col-sm-6">
=======
<<<<<<< HEAD

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
                <a class="navbar-brand text-dark" href="#page-top">Nom Prenom</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item "><a class="nav-link text-dark"  href="#about"> Compte</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="#services">Mes Oppertunite</a></li>
                        
                    </ul>
                </div>
            </div>
</nav>

<div class="card col-sm-6">
=======
@extends('C_client')
@section('oper')

<div class="card col-sm-12">
>>>>>>> 462516b4aa422ba4cfba2ba183dcaecfc8268278
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
              <div class="card-header border-0">
                <h2 class="card-title">Mes Produit</h2>
                <div class="card-tools">
                 
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
<<<<<<< HEAD
                    <th>num</th>
                    <th>Produits</th>
                    <th>quantite</th>
=======
<<<<<<< HEAD
                    <th>num</th>
                    <th>Produits</th>
                    <th>quantite</th>
=======
                    <th>NomProduit : </th>
                  
                    <th>Quantite</th>
>>>>>>> 462516b4aa422ba4cfba2ba183dcaecfc8268278
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
                    
                  </tr>
                  </thead>
                  <tbody>
<<<<<<< HEAD
                    @foreach($Opportunites as $opper)
                  <tr>
                    <td>{{$produit->$opper}}</td>
                    <td>{{$produit->$opper}}</td>
                    <td></td>
=======
                    @foreach($produits as $produit)
                  <tr>
                    <td>{{$produit->nom}}</td>
                    <td>{{$produit->quantite}}</td>
                    
>>>>>>> 462516b4aa422ba4cfba2ba183dcaecfc8268278
                  </tr>
              @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
<<<<<<< HEAD
    </html>
=======
<<<<<<< HEAD
    </html>
=======
     @endsection     
>>>>>>> 462516b4aa422ba4cfba2ba183dcaecfc8268278
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
