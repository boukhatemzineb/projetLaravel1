<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactCController extends Controller
{
    public function index()
    {
        return view('contactsC');
    }
    public function store (Request $request)
    {
        echo"$request->nom ";
    }
}
