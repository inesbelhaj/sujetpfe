<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturefourController extends Controller
{
    public function create()
    {
        return view('facturesfour.create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'facture_num'=> 'required',
            'facture_client'=> 'required',
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

}
