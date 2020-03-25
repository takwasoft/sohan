<?php

namespace App\Http\Controllers;

use App\Model\District;
use Illuminate\Http\Request;
use App\Http\Requests\DistrictRequest;
use App\Http\Resources\District\DistrictResource;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  DistrictResource::collection(District::all());
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
    public function store(DistrictRequest $request)
    {
        $var = District::create([
            $request->all()
        ]);
        return response([
            'data' => new DistrictResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\District  $var
     * @return \Illuminate\Http\Response
     */
    public function show(District $var)
    {
        return new DistrictResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\District  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(District $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new DistrictResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $var)
    {
        $var->delete();
    }
}
