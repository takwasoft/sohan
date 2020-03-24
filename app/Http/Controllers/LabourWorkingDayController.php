<?php

namespace App\Http\Controllers;

use App\Model\LabourWorkingDay;
use Illuminate\Http\Request;
use App\Http\Requests\LabourWorkingDayRequest;
use App\Http\Resources\LabourWorkingDay\LabourWorkingDayResource;

class LabourWorkingDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  LabourWorkingDayResource::collection(LabourWorkingDay::all());
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
    public function store(LabourWorkingDayRequest $request)
    {
        $var = LabourWorkingDay::create([
            $request->all()
        ]);
        return response([
            'data' => new LabourWorkingDayResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LabourWorkingDay  $var
     * @return \Illuminate\Http\Response
     */
    public function show(LabourWorkingDay $var)
    {
        return new LabourWorkingDayResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LabourWorkingDay  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(LabourWorkingDay $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LabourWorkingDay  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LabourWorkingDay $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new LabourWorkingDayResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LabourWorkingDay  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabourWorkingDay $var)
    {
        $var->delete();
    }
}
