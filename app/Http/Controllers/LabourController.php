<?php

namespace App\Http\Controllers;

use App\Model\Labour;
use Illuminate\Http\Request;
use App\Http\Requests\LabourRequest;
use App\Http\Resources\Labour\LabourResource;

class LabourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  LabourResource::collection(Labour::all());
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
    public function store(LabourRequest $request)
    {
        $var = Labour::create([
            $request->all()
        ]);
        return response([
            'data' => new LabourResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Labour  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Labour $var)
    {
        return new LabourResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Labour  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Labour $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Labour  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Labour $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new LabourResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Labour  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Labour $var)
    {
        $var->delete();
    }
}
