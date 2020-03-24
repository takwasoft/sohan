<?php

namespace App\Http\Controllers;

use App\Model\RawMaterial;
use Illuminate\Http\Request;
use App\Http\Requests\RawMaterialRequest;
use App\Http\Resources\RawMaterial\RawMaterialResource;

class RawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  RawMaterialResource::collection(RawMaterial::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RawMaterialRequest $request)
    {
        $var = RawMaterial::create(
            $request->all()
        );
        return response([
            'data' => new RawMaterialResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RawMaterial  $var
     * @return \Illuminate\Http\Response
     */
    public function show(RawMaterial $var)
    {
        return new RawMaterialResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RawMaterial  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(RawMaterial $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RawMaterial  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RawMaterial $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new RawMaterialResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RawMaterial  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(RawMaterial $var)
    {
        $var->delete();
    }
}
