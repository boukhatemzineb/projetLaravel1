<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactAController extends Controller
{
    public function index()
    {
        return view('contactsA');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}
