<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Souscategories;

class souscatController extends Controller
{
    public function index()
    {
        $souscategories = Souscategories::all();
        return view('souscategories.index',compact('souscategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('souscategories.create');
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

            'categorie_nom'=>'required',
            'categorie_libele1'=>'required',
            'categorie_unite1'=>'required',
            'categorie_libele2'=>'required',
            'categorie_unite2'=>'required',

          ]);
          Souscategories::create($request->all());
          return redirect('/souscategories')->with('success', 'souscategories has been added');

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
        $souscategorie = Souscategories::find($id);
        return view('souscategories.edit',compact('souscategorie'));
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

            'categorie_nom'=>'required',
            'categorie_libele1'=>'required',
            'categorie_unite1'=>'required',
            'categorie_libele2'=>'required',
            'categorie_unite2'=>'required',

          ]);
            $souscategorie =  Souscategories ::find($id);
            $souscategorie->categorie_nom = $request->get('categorie_nom');
            $souscategorie->categorie_libele1 = $request->get('categorie_libele1');
            $souscategorie->categorie_unite1 = $request->get('categorie_unite1');
            $souscategorie->categorie_libele2 = $request->get('categorie_libele2');
            $souscategorie->categorie_unite2 = $request->get('categorie_unite2');

            $souscategorie->save();
            return redirect('/souscategories')->with('success', 'has been updated');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $souscategorie = Souscategories::find($id);
        $souscategorie->delete();

        return redirect('/souscategories')->with('success', 'categorie has been deleted Successfully');
    }

}
