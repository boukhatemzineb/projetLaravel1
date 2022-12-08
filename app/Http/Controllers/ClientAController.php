<?php

namespace App\Http\Controllers;
use App\Mail\Commerciale;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Opportunite;
class ClientAController extends Controller
{
    public function index()
    {
        $clients=Client::all();
        return view('ListeClA',compact('clients'));
    }
    public function store (Request $request)
    {
        $validateData=$request->validate([
            'societe'=>'required',
            'telephone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'adresse'=>'required',
            'site'=>'required',  
        ]);
 
        $client=Client::create($validateData);
        return redirect()->route('ClientA.index');
    }
        public function show($id)
        {
            $client=Client::find($id);
            $contacts=Contact::where('client_id','=',$id)->get();
            $opportunites=Opportunite::where('client_id','=',$id)->get();
           
       
            return view('detailsClient',compact('client','contacts','opportunites'));   

        }
        public function edit ($id)
        {
             $client = Client::find($id);

            return response()->json($client);
        }
        public function update (Request $request,$id)
        {
            $client=Client::find($request->id);
            $client->update($request->all());
            return redirect()->route('ClientA.index');
        }
      public function destroy ($id)  
      {
        $client=Client::find($id);
        $client->delete();
        return redirect()->route('ClientA.index');
      }  
      public function ajouter(Request $request)
      {
        $contact = new Contact();
        $contact->nom=$request->input('nom');
        $contact->prenom=$request->input('prenom');
        $contact->fonction=$request->input('fonction');
        $contact->telephone=$request->input('telephone');
        $contact->email=$request->input('email');
        $contact->password=$request->input('nom').'GFRD';
        $contact->client_id=$request->input('id');
        $contact->save();
         Mail::to($request->input('email'))->send(new Commerciale($contact));
      
      return redirect()->route('ClientA.show',$request->id);
      }
      public function edit2($id)
      {
        $contact = Contact::find($id);
        return response()->json($contact);
      }
      public function update1(Request $request)
      {
        $contact=Contact::find($request->id);
        $contact->update($request->all());
        $client=Contact::find($request->id);
        return redirect()->route('ClientA.show',$client->client_id);
      }
      public function destroy1(Request $request)
      {
        $client=Contact::find($request->id);
        $contact=Contact::find($request->id);
        $contact->delete();
        return redirect()->route('ClientA.show',$client->client_id);
      }
}
