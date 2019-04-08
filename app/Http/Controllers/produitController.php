<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
class produitController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();

        return view('produits.index',compact('produits'));
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'produit_caractere'=>'required',
             'image'=> 'required',
            //|image|mimes:jpeg,png,PNG,jpg,gif,svg|max:200',
            'produit_categorie'=> 'required',
            'produit_prixvent'=> 'required',
            'produit_code'=> 'required',
            'produit_tva'=> 'required',

            'produit_nom'=> 'required',
            'produit_reference'=> 'required',


            ]);
            // if(Input::hasFile('image')){

            //     echo 'Uploaded';

            //     $image = Input::file('image');

            //     $image->move('image', $image->getClientOriginalName());

            //     $dest='image/'.$image->getClientOriginalName();
            //     echo '';


            Produit::create($request->all());
          return redirect('/produits')->with('success', 'admin has been added');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function stock()
    {
        return view('stock');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('produits.edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'produit_caractere'=>'required',
            'image'=> 'required',
            'produit_categorie'=> 'required',
            'produit_prixvent'=> 'required',
            'produit_code'=> 'required',
            'produit_nom'=> 'required',
            'produit_tva'=> 'required',
            'produit_reference'=> 'required',
          ]);
          $produit =  Produit ::find($id);
          $produit->produit_caractere = $request->get('produit_caractere');
          $produit->image = $request->get('image');
          $produit->produit_categorie = $request->get('produit_categorie');
          $produit->produit_prixvent = $request->get('produit_prixvent');
          $produit->produit_code = $request->get('produit_code');
          $produit->produit_tva = $request->get('produit_tva');

          $produit->produit_nom = $request->get('produit_nom');
          $produit->produit_reference = $request->get('produit_reference');
          $produit->save();
          return redirect('/produits')->with('success', 'user has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();

        return redirect('/produits')->with('success', 'Stock has been deleted Successfully');
    }

}
