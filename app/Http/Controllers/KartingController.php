<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKartingRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Karting;

class KartingController extends Controller
{
    /* Lista todos */
    public function index(Request $request)
    {
        $filterXname = $request->query("filter_name");
        $kartings = $filterXname ? Karting::where('name', 'like', "%$filterXname%")->get() : Karting::all();

        return view('kartings.index', compact('kartings'));
    }

    /* Formulario para crear nuevos Kartings */
    public function create()
    {
        return view('kartings.create');
    }

    /*Guarda un nuevo Karting en la base de datos. Para ello se valida con 'StoreKartingRequest'.*/
    public function store(StoreKartingRequest $request)
    {
        Karting::create($request->validated());
        return redirect()->route('kartings.index');
    }


    /*Formulario para editar un Karting existente.*/
    public function edit(Karting $karting)
    {
        return view('kartings.edit', compact('karting'));
    }

    /* Guarda un Karting existente.*/
    public function update(StoreKartingRequest $request, Karting $karting)
    {
        $karting->update($request->validated());
        return redirect()->route('kartings.index');
    }

    /* Elimina un Karting.*/
    public function destroy(Karting $karting)
    {
        $karting->delete();
        return redirect()->route('kartings.index');
    }
}
