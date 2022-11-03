<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportuniteAController extends Controller
{
    public function index()
    {
        return view('ListeOppA');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}
