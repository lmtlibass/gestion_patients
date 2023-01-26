<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::paginate(3);

        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Gate::denies('administration')) {
            abort(403, 'Vous n\'êtes pas éligible à ce service');
        }
        return view('service.create');
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
        if (Gate::denies('administration')) {
            abort(403, 'Vous n\'êtes pas éligible à ce service');
        }

        $request->validate([
            'nom_service' => 'required',
            'description' => 'required',
            'medecin'     => 'required',
            'emplacement' => 'required',
            'horraires'   => 'required',
        ]);

        $service = new Service([
            'nom_service' => $request->get('nom_service'),
            'description' => $request->get('nom_service'),
            'medecin'     => $request->get('nom_service'),
            'emplacement' => $request->get('nom_service'),
            'horraires'   => $request->get('nom_service'),
            'user_id'       => Auth::user()->id,
        ]);

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service Ajouté avec succés');
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
        $service = Service::findOrFail($id);

        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if (Gate::denies('administration')) {
            abort(403, 'Vous n\'êtes pas éligible à ce service');
        }

        $service = Service::findOrFail($id);

        return view('service.edit', compact('service'));
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
        if (Gate::denies('administration')) {
            abort(403, 'Vous n\'êtes pas éligible à ce service');
        }

        $request->validate([
            'nom_service' => 'required',
            'description' => 'required',
            'medecin'     => 'required',
            'emplacement' => 'required',
            'horraires'   => 'required',
        ]);

        $service = Service::findOrFail($id);

         $service->nom_service      = $request->get('nom_service');
         $service->description      = $request->get('description');
         $service->medecin          = $request->get('medecin');
         $service->emplacement      = $request->get('emplacement');
         $service->horraires        = $request->get('horraires');
         $service->user_id          = Auth::user()->id;


        $service->update();

        return redirect()->route('service.index')->with('success', 'Service modifier avec succé');
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
        if (Gate::denies('administration')) {
            abort(403, 'Vous n\'êtes pas éligible à ce service');
        }
        
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect()->route('service.index')->with('info', 'suppression réussi');
    }
}
