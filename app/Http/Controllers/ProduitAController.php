<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitAController extends Controller
{
    public function index()
    {
        return view('ListePA');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}
