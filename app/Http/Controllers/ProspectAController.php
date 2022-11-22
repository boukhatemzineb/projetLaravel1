<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;

class ProspectAController extends Controller
{
    public function index()
    {
        $prospects=Prospect::all();
        return view('ListeProA',compact('prospects'));
    }
    public function store (Request $request)
    {
        $validateData=$request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'societe'=>'required',
            'fonction'=>'required',
           'email' =>'required|email',
           'telephone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
           'adresse' =>'required',
           'site'=>'required',
           'statut'=>'required',
           'source'=>'required',
        ]);
        $prospect=Prospect::create($validateData);
        return redirect()->route('ProspectA.index');
    }
        public function show($id)
        {
            $prospect = Prospect::find($id);
   
            return response()->json($prospect);

        }
        public function edit ($id)
        {
             $prospect = Prospect::find($id);
            return response()->json($prospect);
        }
        public function update (Request $request,$id)
        {
            $prospect=Prospect::find($request->id);
            if($prospect!=null)
            $prospect->update($request->all());
            return redirect()->route('ProspectA.index');
        }
      public function destroy ($id)  
      {
        $prospect=Prospect::find($id);
        $prospect->delete();
        return redirect()->route('ProspectA.index');
      }  
     
}
