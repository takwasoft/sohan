<?php

namespace App\Http\Controllers;

use App\Model\Area;
use Illuminate\Http\Request;
use App\Http\Requests\AreaRequest;
use App\Http\Resources\Area\AreaResource;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  AreaResource::collection(Area::all());
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
    public function store(AreaRequest $request)
    {
        $var = Area::create([
            $request->all()
        ]);
        return response([
            'data' => new AreaResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Area $var)
    {
        return new AreaResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new AreaResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $var)
    {
        $var->delete();
    }
}
