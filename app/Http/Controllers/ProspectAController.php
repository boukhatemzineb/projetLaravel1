<?php

namespace App\Http\Controllers;
use App\Mail\Commerciale;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Models\Client;
use App\Models\Contact;
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
      public function transformer($id)
      {
        $prospect =Prospect::find($id);
        $client=Client::where('prospect_id','=',$id)->first();
        if($client==null) {
        
          $c = new Client();
          $c->societe=$prospect->societe;
          $c->adresse=$prospect->adresse;
          $c->site=$prospect->site;
          $c->prospect_id=$prospect->id;
          $c->save();
          $cli=Client::where('societe','=',$prospect->societe)->first();
          echo $cli->id;
          $contact = new Contact();
          $contact->nom=$prospect->nom;
          $contact->prenom=$prospect->prenom;
          $contact->fonction=$prospect->fonction;
          $contact->telephone=$prospect->telephone;
          $contact->email=$prospect->email;
          $contact->password=$prospect->nom."2022";
          $contact->client_id=$cli->id;
          $contact->save();
          Mail::to($prospect->email)->send(new Commerciale($contact));
        }
       /* return redirect()->route('ProspectA.index');  */
      }
}
