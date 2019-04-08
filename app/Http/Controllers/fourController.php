<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
class fourController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::all();
        return view('fournisseurs.index',compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fournisseurs.create');
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
            'fournisseur_nom'=>'required',
            'fournisseur_prenom'=> 'required',

            'fournisseur_adresse'=> 'required',
            'fournisseur_telephone'=> 'required',

            'fournisseur_contact' => 'required'
          ]);
          Fournisseur::create($request->all());
          return redirect('/fournisseurs')->with('success', 'fournisseur has been added');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseur = Fournisseur::find($id);
        return view('fournisseurs.edit',compact('fournisseur'));
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
            'fournisseur_nom'=>'required',
            'fournisseur_prenom'=> 'required',

            'fournisseur_adresse'=> 'required',
            'fournisseur_telephone'=> 'required|integer',

            'fournisseur_contact' => 'required'
          ]);
            $fournisseur =  Fournisseur ::find($id);
            $fournisseur->fournisseur_nom = $request->get('fournisseur_nom');
            $fournisseur->fournisseur_prenom = $request->get('fournisseur_prenom');
            $fournisseur->fournisseur_adresse = $request->get('fournisseur_adresse');
            $fournisseur->fournisseur_telephone = $request->get('fournisseur_telephone');
            $fournisseur->fournisseur_contact = $request->get('fournisseur_contact');
            $fournisseur->save();
            return redirect('/fournisseurs')->with('success', 'fournisseur has been updated');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();

        return redirect('/fournisseurs')->with('success', 'fournisseurs has been deleted Successfully');
    }
}
