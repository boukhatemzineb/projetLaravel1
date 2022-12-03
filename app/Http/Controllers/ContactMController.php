<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class ContactMController extends Controller
{
    public function index()
    { $contact=Contact::find(1);
        return view ('infper',compact('contact'));
    }
    public function update(Request $request ,$id)
    {
        $contact=Contact::find($id);
        
        $contact->fonction=$request->input('fonction');
        $contact->telephone=$request->input('telephone');
        $contact->email=$request->input('email');
        $contact->save();
      return redirect()->route('ContactM.index');
        }

    }
   

