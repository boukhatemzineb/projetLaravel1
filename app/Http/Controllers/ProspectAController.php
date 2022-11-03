<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspectAController extends Controller
{
    public function index()
    {
        return view('ListeProA');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}
