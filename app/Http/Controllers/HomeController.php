<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {    
        $user=User::where([['email','=',$request->email],['password','=',$request->password]])->first();
           if($user!=null)
           {
            if($user->role == "admin")
              return view('administrateur');
              else
              return view('commerciale',compact('user'));
           }
           $contact=Contact::where([['email','=',$request->email],['password','=',$request->password]])->first();  
            if($contact!=null)
            return redirect()->route('C_client');
            return redirect()->route('login');
    }
}
