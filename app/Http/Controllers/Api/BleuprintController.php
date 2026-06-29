<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlueprintResource;
use App\Models\Bleuprint;
use Illuminate\Http\Request;

class BleuprintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $bleuprints = Bleuprint::where('user_id', auth()->id())->get();

    return BlueprintResource::collection($bleuprints);
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
