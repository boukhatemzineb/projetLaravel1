<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientCController extends Controller
{
    public function index()
    {
        return view('ListeClC');
    }
    public function store (Request $request)
    {
        echo"$request->societe ";
    }
}
