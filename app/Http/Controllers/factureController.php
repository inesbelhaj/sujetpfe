<?php

namespace App\Http\Controllers;
use App\Facture;
use Illuminate\Http\Request;

class factureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::all();

        return view('factures.index',compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factures.create');
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

            'facture_num'=> 'required',
            'client_nom'=> 'required',
            'facture_datef'=> 'required',
            'facture_paiment'=> 'required',
            'facture_date'=> 'required',
            'facture_mod' => 'required',

            ]);

            Facture::create($request->all());
          return redirect('/factures')->with('success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facture = Facturefournisseur::find($id);
        return view('factures.edit',compact('facture'));
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
            'facture_num'=> 'required',
            'client_nom'=> 'required',
            'facture_datef'=> 'required',
            'facture_paiment'=> 'required',
            'facture_date'=> 'required',
            'facture_mode' => 'required',
          ]);
          $facture =  Facturefournisseur ::find($id);
          $facture->facture_num = $request->get('facture_num');
          $facture->client_nom = $request->get('client_nom');
          $facture->facture_datef = $request->get('facture_datef');
          $facture->facture_paiment = $request->get('facture_paiment');
          $facture->facture_date = $request->get('facture_date');
          $facture->facture_mode = $request->get('facture_mode');
          $facture->save();
          return redirect('/factures')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facture = Facturefournisseur::find($id);
        $facture->delete();

        return redirect('/factures')->with('success', 'Stock has been deleted Successfully');
    }

}
