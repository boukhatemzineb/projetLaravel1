<?php

namespace App\Http\Controllers;
use App\Mail\Commerciale;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
class CommercialAController extends Controller
{
    public function index()
    {
        $commerciales=User::where('role','=','commerciale')->get();
        return view('ListeCoA',compact('commerciales'));
    }
    public function store(Request $request)
    {
        
        $commerciale = new User();
        $commerciale->nom=$request->input('nom');
        $commerciale->prenom=$request->input('prenom');
        $commerciale->email=$request->input('email');
        $commerciale->role='commerciale';
        $commerciale->password=$request->input('prenom').'2022';
        $commerciale->save();
        Mail::to($request->input('email'))->send(new Commerciale($commerciale));
        return redirect()->route('CommercialA.index');
    }
    public function show($id)
        {
            $commerciale = User::find($id);
            
            return response()->json($commerciale);

        }

        public function update (Request $request,$id)
        {
            $commerciale=User::find($request->id);
            $commerciale->update($request->all());
            return redirect()->route('CommercialA.index');
        }
        public function destroy ($id)  
        {
          $commerciale=User::find($id);
          $commerciale->delete();
          return redirect()->route('CommercialA.index');
        }  
}
