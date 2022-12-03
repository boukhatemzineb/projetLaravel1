<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    { $events=Event::all();
        return view('afficherevent',compact('events'));
    }
    public function afficher($id)
      {
        $events=Event::find($id);
        $client=$client->client_id;
        $events=Event::where('id','=',$client)->get();
        
        return view('',compact(''));
      }
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'date'=>'required',
            'heure'=>'required',
            'description'=>'required',
            
        ]);
        
        $events=Event::create($validateData);

    return redirect()->route('event');
       
    }
    public function update(Request $request ,$id)
    {
        $events=Event::find($id);
        
        $events->fonction=$request->input('date');
        $eventst->telephone=$request->input('heure');
        $events->email=$request->input('description');
        $events->save();
      return redirect()->route('event');
        }
        public function destroy ($id)  
        {
          $events=Event::find($id);
          $events->delete();
          return redirect()->route('event');
        }  

}
