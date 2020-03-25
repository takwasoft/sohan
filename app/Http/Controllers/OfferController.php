<?php

namespace App\Http\Controllers;

use App\Model\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use App\Http\Resources\Offer\OfferResource;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  OfferResource::collection(Offer::all());
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
    public function store(OfferRequest $request)
    {
        $var = Offer::create([
            $request->all()
        ]);
        return response([
            'data' => new OfferResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $var)
    {
        return new OfferResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new OfferResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $var)
    {
        $var->delete();
    }
}
