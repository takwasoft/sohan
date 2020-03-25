<?php

namespace App\Http\Controllers;

use App\Model\SubDistrict;
use Illuminate\Http\Request;
use App\Http\Requests\SubDistrictRequest;
use App\Http\Resources\SubDistrict\SubDistrictResource;

class SubDistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  SubDistrictResource::collection(SubDistrict::all());
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
    public function store(SubDistrictRequest $request)
    {
        $var = SubDistrict::create([
            $request->all()
        ]);
        return response([
            'data' => new SubDistrictResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubDistrict  $var
     * @return \Illuminate\Http\Response
     */
    public function show(SubDistrict $var)
    {
        return new SubDistrictResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubDistrict  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(SubDistrict $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubDistrict  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubDistrict $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new SubDistrictResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubDistrict  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubDistrict $var)
    {
        $var->delete();
    }
}
