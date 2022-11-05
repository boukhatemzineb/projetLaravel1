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
    public function AjouterProspectA(Request $request)
    {
        return view('prospectA');
    }
//stoker au bdd
    public function stokerprospectA(Request $request)
    {
     $this->validate($request,[
         'nom'=>'required',
         'prenom'=>'required',
         'societe'=>'required',
       'fonction'=>'required',
        'email' =>'required|email',
        'telephone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
        'adresse' =>'required',
        'site'=>'required',
     ]  );
'app/Models/prospectA'::create($request->all());
return back()->with('success', 'Les données ont été enregistrées avec succès.');
    }
}
