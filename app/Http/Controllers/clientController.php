<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class clientController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
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
             'client_nom' => 'required',
             'client_prenom' => 'required',
             'client_adresse'=> 'required',
             'client_telephone'=> 'required',
             'client_contact' => 'required',
          ]);


          Client::create($request->all());
          return redirect('/clients')->with('success', 'clients has been added');

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
        $client = Client::find($id);
        return view('clients.edit',compact('client'));
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
            'client_nom'=>'required',
            'client_prenom'=> 'required',

            'client_adresse'=> 'required',
            'client_telephone'=> 'required|integer',

            'client_contact' => 'required'
          ]);
            $client =  Client ::find($id);
            $client->client_nom = $request->get('client_nom');
            $client->client_prenom = $request->get('client_prenom');
            $client->client_adresse = $request->get('client_adresse');
            $client->client_telephone = $request->get('client_telephone');
            $client->client_contact = $request->get('client_contact');
            $client->save();
            return redirect('/clients')->with('success', 'client has been updated');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('/clients')->with('success', 'client has been deleted Successfully');
    }
}
