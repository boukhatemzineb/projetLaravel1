<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportuniteCController extends Controller
{

    public function index()
    {
        return view('ListeOppC');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}
