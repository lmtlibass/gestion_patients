<?php

namespace App\Http\Controllers;

use App\Models\InfoEtudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class EtudiantController extends Controller
{
    public function getEtudiantInfo(){

        if (Gate::denies('administration')) {
            abort(403, 'Vous n\'êtes pas éligible à ce service');
        }

        $info_etudiants = InfoEtudiant::paginate(5);

        return view('admin.etudiant', compact('info_etudiants'));
    }
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

        $etudiant = InfoEtudiant::findOrFail($id);

        return view('admin.showEtudiant', compact('etudiant'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info_etudiant = InfoEtudiant::findOrFail($id);
        return view('etudiant.edit', compact('info_etudiant'));
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
        $request->validate([
            'prenom'        => 'required',
            'nom'           => 'required',
            'num_etudiant'  => 'required',
            'departement'   => 'required',
            'symptome'      => 'required',
            'traitement'    => 'required',
            'antecedant'    => 'required'
        ]);

         $info_etudiant = InfoEtudiant::findOrFail($id);

         $info_etudiant->prenom        = $request->get('prenom');
         $info_etudiant->nom           = $request->get('nom');
         $info_etudiant->num_etudiant  = $request->get('num_etudiant');
         $info_etudiant->departement   = $request->get('departement');
         $info_etudiant->symptome      = $request->get('symptome');
         $info_etudiant->traitement    = $request->get('traitement');
         $info_etudiant->antecedant    = $request->get('antecedant');
         $info_etudiant->user_id       = Auth::user()->id;
        

        $info_etudiant->update();
        return redirect()->route('etudiant.index')->with('success', 'Vos informations ont été mis à jours');
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
        
        $info_etudiant = InfoEtudiant::findOrFail($id);
        $info_etudiant->delete();

        return redirect()->route('etudiant.index')->with('success', 'vos informations ont été supprimés');
        
    }
}
