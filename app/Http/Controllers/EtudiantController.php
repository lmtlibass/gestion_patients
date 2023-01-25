<?php

namespace App\Http\Controllers;

use App\Models\InfoEtudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $info_etudiant = InfoEtudiant::where('user_id', '=', $id )->first();

        return view('etudiant.index', compact('info_etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
        //
        $request->validate([
            'prenom'        => 'required',
            'nom'           => 'required',
            'num_etudiant'  => 'required',
            'departement'   => 'required',
            'symptome'      => 'required',
            'traitement'    => 'required',
            'antecedant'    => 'required'
        ]);

         $info_etudiant = new InfoEtudiant([
            'prenom'        => $request->get('prenom'),
            'nom'           => $request->get('nom'),
            'num_etudiant'  => $request->get('num_etudiant'),
            'departement'   => $request->get('departement'),
            'symptome'      => $request->get('symptome'),
            'traitement'    => $request->get('traitement'),
            'antecedant'    => $request->get('antecedant'),
            'user_id'       => Auth::user()->id,
        ]);

        $info_etudiant->save();
        return redirect()->route('etudiant.index')->with('success', 'information enregistrer avec succes');
        
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
        return view('etudiant.edit', compact('id'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
