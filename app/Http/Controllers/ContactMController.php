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
<<<<<<< HEAD
        
=======
>>>>>>> 462516b4aa422ba4cfba2ba183dcaecfc8268278
        $contact->fonction=$request->input('fonction');
        $contact->telephone=$request->input('telephone');
        $contact->email=$request->input('email');
        $contact->save();
      return redirect()->route('ContactM.index');
        }

    }
   

