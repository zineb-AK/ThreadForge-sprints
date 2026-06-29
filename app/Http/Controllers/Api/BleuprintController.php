<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BleuprintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bleuprints = auth()->user()->bleuprints()->get();
        return response()->json($bleuprints);
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
    public function show(Bleuprint $bleuprint)
    {
    return response()->json($bleuprint);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
