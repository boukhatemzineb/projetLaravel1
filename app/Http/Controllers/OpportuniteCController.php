<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Opportunite;
use App\Models\Client;
use App\Models\Opp;
class OpportuniteCController extends Controller
{
    public function index()
    {
        $opportunites=DB::table('Opportunites')->join('clients','opportunites.client_id','=','clients.id')->select('opportunites.*','clients.societe')->get();
        return view('ListeOppC',compact('opportunites'));
    }
    public function store (Request $request)
    {
        $opportunite = new Opportunite();
        $opportunite->nom=$request->input('nom');
        $opportunite->etape=$request->input('etape');
        $opportunite->date=$request->input('date');
        $client=Client::where('societe','=',$request->input('client'))->first();
        if($client!=null)
        {
            $opportunite->client_id=$client->id;
            $opportunite->save();
           
        }

        return redirect()->route('OpportuniteC.index');
    }
    public function show($id)
    {
        
        $opportunite=DB::table('opportunites')->join('clients',function ($join) use($id){$join->on('clients.id','=','opportunites.client_id')->where('opportunites.id','=',$id);})->select('opportunites.*','clients.societe')->first();
        $produits=DB::table('opps')->join('produit',function ($join) use($id){$join->on('produit.id','=','opps.produit_id')->where('opps.opportunite_id','=',$id);})->select('opps.*','produit.nom')->get();
        return view('opportuniteC',compact('opportunite','produits')); ;
        

    }
    public function edit($id)
    {
        $opportunite=DB::table('opportunites')->join('clients',function ($join) use($id){$join->on('clients.id','=','opportunites.client_id')->where('opportunites.id','=',$id);})->select('opportunites.*','clients.societe')->first();
        return response()->json($opportunite);
    }
    public function update (Request $request,$id)
        {
            $opportunite=Opportunite::find($request->id);
            $opportunite->nom=$request->input('nom');
            $opportunite->etape=$request->input('etape');
            $opportunite->date=$request->input('date');
            $client=Client::where('societe','=',$request->input('client'))->first();
            if($client!=null)
            {
                $opportunite->client_id=$client->id;
                $opportunite->save();
               
            }
            return redirect()->route('OpportuniteC.index');
        }
    public function destroy ($id)  
      {
        $opportunite=Opportunite::find($id);
        $opportunite->delete();
        return redirect()->route('OpportuniteC.index');
      }  
    
}
