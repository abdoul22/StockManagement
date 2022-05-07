<?php

namespace App\Http\Controllers;

use App\Models\Sessioncontrole;
use Illuminate\Http\Request;

class SessioncontroleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $controle = Sessioncontrole::all();
        $controles = Sessioncontrole::latest()->paginate(10);
        return view('sessioncontrole.index', compact('controles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sessioncontrole.create');
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
            'name' => 'required',
            'price' => 'required',
            'details' => 'required',
            'operation' => 'required'
        ]);

        $controle = Sessioncontrole::create($request->all());
        return redirect()->route('sessioncontrole.index')
            ->with('success', 'Les donnès ont etè crèe avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sessioncontrole  $sessioncontrole
     * @return \Illuminate\Http\Response
     */
    public function show(Sessioncontrole $sessioncontrole)
    {
        return view('sessioncontrole.show', compact('sessioncontrole'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sessioncontrole  $sessioncontrole
     * @return \Illuminate\Http\Response
     */
    public function edit(Sessioncontrole $sessioncontrole)
    {
        return view('sessioncontrole.edit', compact('sessioncontrole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sessioncontrole  $sessioncontrole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sessioncontrole $sessioncontrole)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'details' => 'required',
            'operation' => 'required'
        ]);

        $controle = Sessioncontrole::updated($request->all());
        return redirect()->route('sessioncontrole.index')->with('success', 'Modifièe avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sessioncontrole  $sessioncontrole
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessioncontrole $sessioncontrole)
    {
        $sessioncontrole->delete($sessioncontrole);
        return redirect()->route('sessioncontrole.index')->with('success', 'Supprimèe avec succes');
    }
}
