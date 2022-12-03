<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produit;
use App\Models\Opp;
class OppsController extends Controller
{
    public function store(Request $request)
    {
        $produit=Produit::where('nom','=',$request->nom)->first();
        if($produit!=null)
        {
            $opp = new Opp;
            $opp->opportunite_id=$request->id;
            $opp->produit_id=$produit->id;
            $opp->quantite=$request->quantite;
            $opp->save();
        }
        return redirect()->route('OpportuniteA.show',$request->id);
    }


    public function edit($ido,$idp)
    {
        
        $produit=Opp::where([['opportunite_id','=',$ido],['produit_id','=',$idp]])->first();
        return response()->json($produit);
    }
    public function update(Request $request)
    {
        $produit=Opp::where([['opportunite_id','=',$request->ido],['produit_id','=',$request->idp]])->update(['quantite'=>$request->quantite]);
        return redirect()->route('OpportuniteA.show',$request->ido);

    }
    public function destroy(Request $request)
    {
        $produit=Opp::where([['opportunite_id','=',$request->ido],['produit_id','=',$request->idp]])->delete();
        
        return redirect()->route('OpportuniteA.show',$request->ido);
    }
}
