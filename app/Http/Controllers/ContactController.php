<?php

namespace App\Http\Controllers;

use App\Mail\Commerciale;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Client;

class ContactController extends Controller
{
    public function index()
    {
        $contacts=Contact::all();
        return view('contactsC',compact('contacts'));
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->nom=$request->input('nom');
        $contact->prenom=$request->input('prenom');
        $contact->fonction=$request->input('fonction');
        $contact->telephone=$request->input('telephone');
        $contact->email=$request->input('email');
        $contact->password=$request->input('prenom').'2022';
        $client=Client::where('societe','=',$request->input('client'))->first();
        if($client!=null)
        {
            $contact->client_id=$client->id;
            $contact->save();
            Mail::to($request->input('email'))->send(new Commerciale($contact));
        }

        return redirect()->route('Contact.index');
    }
    public function show($id)
        {
            $contact = Contact::find($id);
            $client=Client::where('id','=',$contact->client_id)->first();
            $contact->client_id=$client->societe;
            return response()->json($contact);

        }
        public function update (Request $request,$id)
        {
            $contact=Contact::find($request->id);
            $contact->nom=$request->input('nom');
            $contact->prenom=$request->input('prenom');
            $contact->fonction=$request->input('fonction');
            $contact->telephone=$request->input('telephone');
            $contact->email=$request->input('email');
            $client=Client::where('societe','=',$request->input('client'))->first();
             if($client!=null)
              {
            $contact->client_id=$client->id;
            $contact->save();
               }
            return redirect()->route('Contact.index');
        }
    public function destroy ($id)  
        {
          $contact=Contact::find($id);
          $contact->delete();
          return redirect()->route('Contact.index');
        }  
}
