<?php

namespace App\Http\Controllers;

use App\Model\Color;
use Illuminate\Http\Request;
use App\Http\Requests\ColorRequest;
use App\Http\Resources\Color\ColorResource;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  ColorResource::collection(Color::all());
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
    public function store(ColorRequest $request)
    {
        $var = Color::create([
            $request->all()
        ]);
        return response([
            'data' => new ColorResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Color $var)
    {
        return new ColorResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new ColorResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $var)
    {
        $var->delete();
    }
}
