<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
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
            $client = Client::find($id);
            
            return response()->json($client);

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
    
}
