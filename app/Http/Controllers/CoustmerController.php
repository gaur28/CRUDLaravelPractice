<?php

namespace App\Http\Controllers;

use App\Models\Coustmer;
use App\Http\Requests\UpdateCoustmerRequest;
use App\Http\Resources\V1\CoustmerResource;
use App\Http\Resources\V1\CoustmerCollection;
use App\Http\Requests\V1\StoreCoustmerRequest;


class CoustmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CoustmerCollection(Coustmer::paginate());
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
    public function store(StoreCoustmerRequest $request)
    {
        return new CoustmerResource(Coustmer::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Coustmer $coustmer)
    {
        return new CoustmerResource($coustmer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coustmer $coustmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoustmerRequest $request, Coustmer $coustmer)
    {
        $coustmer-> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coustmer $coustmer)
    {
        //
    }
}
