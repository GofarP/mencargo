<?php

namespace App\Http\Controllers;

use App\Models\PesananMenCargo;
use Illuminate\Http\Request;

class PesananMenCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pesananmencargo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesananmencargo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PesananMenCargo $pesananMenCargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesananMenCargo $pesananMenCargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesananMenCargo $pesananMenCargo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesananMenCargo $pesananMenCargo)
    {
        //
    }
}
