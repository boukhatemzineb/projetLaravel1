<?php

namespace App\Http\Controllers;
use App\Models\Event;
<<<<<<< HEAD
use App\Models\Contact;
=======
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
use Illuminate\Http\Request;

class EventController extends Controller
{
<<<<<<< HEAD
    public function index1($id)
    { $events=Event::where('contact_id','=',$id)->get();
      $contact=Contact::find($id);
        return view('event',compact('events','contact'));
=======
    public function index()
    { $events=Event::all();
        return view('afficherevent',compact('events'));
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
    }
    public function afficher($id)
      {
        $events=Event::find($id);
<<<<<<< HEAD
        //$contacts=$contacts->id;
        $events=Event::where('id','=',2)->get();
        
        return view('afficherevent',compact('events'));
      }
    public function store(Request $request)
    {
        
        $event= new Event();
        $event->date=$request->input('date');
        $event->heure=$request->input('heure');
        $event->description=$request->input('description');
        $event->contact_id=$request->input('idC');
        $event->user_id=$request->input('idU');
        $event->save();

        return redirect()->route('index1',['id'=>$request->idC]); 
       
    }
    public function show ($id)
        {
             $event= Event::find($id);

            return response()->json($event);
        }
    public function update(Request $request)
    {
        $events=Event::find($request->idE);
        
        $events->date=$request->input('date');
        $events->heure=$request->input('heure');
        $events->description=$request->input('description');
        $events->save();
        return redirect()->route('index1',['id'=>$request->idC]); 
        }
        public function destroy (Request $request )  
        {
          
          $events=Event::find($request->idE);
          $events->delete();
          
         return redirect()->route('index1',['id'=>$request->idC]); 
=======
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
>>>>>>> ae2744bb9ac0ed31bf3c95ac195d75d002d9d0fd
        }  

}
