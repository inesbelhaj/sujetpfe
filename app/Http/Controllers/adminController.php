<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();

        return view('admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
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
        'admin_nom'=>'required',
            'admin_prenom'=> 'required',
            'admin_sexe'=> 'required',
            'admin_adresse'=> 'required',
            'admin_telephone'=> 'required',
            'admin_categorie'=> 'required',
            'admin_login'=> 'required',
            'admin_pasword' => 'required',
            'admin_naissance'=> 'required',
            ]);

          Admin::create($request->all());
          return redirect('/admins')->with('success', 'admin has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::find($id);
        return view('admins.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admins.edit',compact('admin'));
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
            'admin_nom'=>'required',
            'admin_prenom'=> 'required',
            'admin_sexe'=> 'required',
            'admin_adresse'=> 'required',
            'admin_telephone'=> 'required|integer',
            'admin_categorie'=> 'required',
            'admin_login'=> 'required',
            'admin_pasword' => 'required',
            'admin_naissance'=> 'required|',
          ]);
          $admin =  Admin ::find($id);
          $admin->admin_nom = $request->get('admin_nom');
          $admin->admin_prenom = $request->get('admin_prenom');
          $admin->admin_naissance = $request->get('admin_naissance');
          $admin->admin_adresse = $request->get('admin_adresse');
          $admin->admin_telephone = $request->get('admin_telephone');
          $admin->admin_categorie = $request->get('admin_categorie');
          $admin->admin_login = $request->get('admin_login');
          $admin->admin_pasword = $request->get('admin_pasword') ;
          $admin->save();
          return redirect('/admins')->with('success', 'user has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        return redirect('/admins')->with('success', 'Stock has been deleted Successfully');
    }
    public function wel()
    {
        return view('wel');
    }
}
