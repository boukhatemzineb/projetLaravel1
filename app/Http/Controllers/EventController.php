<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Contact;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index1($id)
    { $events=Event::where('contact_id','=',$id)->get();
      $contact=Contact::find($id);
        return view('event',compact('events','contact'));
    }
    public function afficher($id)
      {
        $events=Event::find($id);
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
        }  

}
