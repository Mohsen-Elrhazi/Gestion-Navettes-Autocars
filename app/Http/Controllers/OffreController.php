<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffreRequest;
use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres=Offre::All();
        // dd($offres);
        return view("societe.offres",compact("offres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OffreRequest $request)
    {
    
        $user=auth()->user();
        
        // dd( $user);
        // dd($user->role->name);
        
        if ($user->role->name !== 'Societe de Transport') {
            return redirect()->back()->withErrors("Seules les sociétés peuvent créer une offre.");
        }
        
        
        $offre = new Offre();
        $offre->start_city = $request->start_city;
        $offre->end_city = $request->end_city;
        $offre->start_date = $request->start_date;
        $offre->end_date = $request->end_date;
        $offre->start_time = $request->start_time;
        $offre->end_time = $request->end_time;
        $offre->available_seats = $request->available_seats;
        $offre->total_seats = $request->total_seats;
        $offre->description = $request->description;

        $offre->user_id= $user->id;
        
        $offre->save();
        
        return redirect()->route('offres.index')->with('success', 'Offre créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OffreRequest $request, Offre $offre)
    {
        $offre->start_city = $request->start_city;
        $offre->end_city = $request->end_city;
        $offre->start_date = $request->start_date;
        $offre->end_date = $request->end_date;
        $offre->start_time = $request->start_time;
        $offre->end_time = $request->end_time;
        $offre->available_seats = $request->available_seats;
        $offre->total_seats = $request->total_seats;
        $offre->description = $request->description;

        $offre->update();
        
        return redirect()->route('offres.index')->with('success', 'Offre mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        $offre->delete();
        return redirect()->route('offres.index')->with('success', 'Offre supprimée avec succès');

        }
}