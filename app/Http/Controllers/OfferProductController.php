<?php

namespace App\Http\Controllers;

use App\Model\OfferProduct;
use Illuminate\Http\Request;
use App\Http\Requests\OfferProductRequest;
use App\Http\Resources\OfferProduct\OfferProductResource;

class OfferProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  OfferProductResource::collection(OfferProduct::all());
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
    public function store(OfferProductRequest $request)
    {
        $var = OfferProduct::create([
            $request->all()
        ]);
        return response([
            'data' => new OfferProductResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfferProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function show(OfferProduct $var)
    {
        return new OfferProductResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfferProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(OfferProduct $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfferProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferProduct $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new OfferProductResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfferProduct  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferProduct $var)
    {
        $var->delete();
    }
}
