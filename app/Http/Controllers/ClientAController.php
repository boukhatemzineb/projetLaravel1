<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientAController extends Controller
{
    public function index()
    {
        return view('ListeClA');
    }
    public function store (Request $request)
    {
        echo"$request->societe ";
    }
    
}
