<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
class confController extends Controller
{
    public function index()
    {
        $configurations = Configuration::all();
        return view('configurations.index',compact('configurations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configurations.create');
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
            'conf_tva'=>'required'
          ]);
          Configuration::create($request->all());
          return redirect('/configurations')->with('success', 'categorie has been added');

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
        $configuration = Configuration::find($id);
        return view('configurations.edit',compact('configuration'));
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
            'conf_tva'=>'required',

          ]);
            $configuration =  Configuration ::find($id);
            $configuration->conf_tva = $request->get('conf_tva');

            $configuration->save();
            return redirect('/configurations')->with('success', 'has been updated');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $configuration = Configuration::find($id);
        $configuration->delete();

        return redirect('/configurations')->with('success', 'categorie has been deleted Successfully');
    }



}
