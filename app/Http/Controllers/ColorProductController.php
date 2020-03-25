<?php

namespace App\Http\Controllers;

use App\Model\ColorProduct;
use Illuminate\Http\Request;
use App\Http\Requests\ColorProductRequest;
use App\Http\Resources\ColorProduct\ColorProductResource;

class ColorProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  ColorProductResource::collection(ColorProduct::all());
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
    public function store(ColorProductRequest $request)
    {
        $var = ColorProduct::create([
            $request->all()
        ]);
        return response([
            'data' => new ColorProductResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ColorProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function show(ColorProduct $var)
    {
        return new ColorProductResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ColorProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(ColorProduct $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ColorProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ColorProduct $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new ColorProductResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ColorProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(ColorProduct $var)
    {
        $var->delete();
    }
}
