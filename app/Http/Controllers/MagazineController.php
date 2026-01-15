<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $magazines = Magazine::all();
        return view('magazines.index', compact('magazines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('magazines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Magazine::create([
            "name" => $request->name,
            "title" => $request->title,
            "content" => $request->content
        ]);

        return redirect(route('magazines_index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Magazine $magazine)
    {
        //Pagina di dettaglio
        return view('magazines.detail', compact('magazine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Magazine $magazine)
    {
        //Accedere alla pagina che contiene il form per l'update
        return view('magazines.edit', compact('magazine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Magazine $magazine)
    {
        //Modificare i dati del record, NON dell'intera tabella. Quindi NON utilizza il Modello bensì utilizza l'oggetto istanziato con la classe del Modello.
        $magazine->update([
            "name" => $request->name,
            "title" => $request->title,
            "content" => $request->content
        ]);

        return redirect(route('magazine_show', compact('magazine')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Magazine $magazine)
    {
        //Cancellare il record
        $magazine->delete();
        return redirect(route('magazines_index'));
    }
}