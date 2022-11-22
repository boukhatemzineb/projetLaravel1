<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use App\Models\produit;
class ProduitController extends Controller
{
    public function index()
    { $produits=Produit::all();
        return view('ListePA',compact('produits'));
    }
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'nom'=>'required|max:255',
            'description'=>'required',
            'prix'=>'required',
            'quantite'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif,svg',
        ]);
        $image=$request->file('image');
        $destinationPath='public/';
        $profileImage=date('YmdHis').".".$image->getClientOriginalExtension();
        $image->move($destinationPath,$profileImage);
        $validateData['image']=$profileImage;
        $produit=Produit::create($validateData);

    return redirect()->route('Produit.index');
       
    }



    public function show($id)
    {
             $produit = Produit::find($id);
            return response()->json($produit);

    }
    public function destroy ($id)
    {
        $pr=Produit::find($id);
        
        $pr->delete();
        return redirect()->route('Produit.index');


    }
    public function update(Request $request ,$id){
        $produit=produit::find($request->id);
        
           
            $produit->update($request->all());
            return redirect()->route('Produit.index');

    }
}
