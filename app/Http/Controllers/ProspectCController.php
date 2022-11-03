<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspectCController extends Controller
{
    public function index()
    {
        return view('ListeProC');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}


