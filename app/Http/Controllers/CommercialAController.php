<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommercialAController extends Controller
{
    public function index()
    {
        return view('ListeCoA');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}
