<?php

namespace App\Http\Controllers;

use App\Model\Division;
use Illuminate\Http\Request;
use App\Http\Requests\DivisionRequest;
use App\Http\Resources\Division\DivisionResource;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  DivisionResource::collection(Division::all());
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
    public function store(DivisionRequest $request)
    {
        $var = Division::create([
            $request->all()
        ]);
        return response([
            'data' => new DivisionResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Division  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Division $var)
    {
        return new DivisionResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Division  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Division  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new DivisionResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Division  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $var)
    {
        $var->delete();
    }
}
