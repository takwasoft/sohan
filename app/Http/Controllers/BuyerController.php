<?php

namespace App\Http\Controllers;

use App\Model\Buyer;
use Illuminate\Http\Request;
use App\Http\Requests\BuyerRequest;
use App\Http\Resources\Buyer\BuyerResource;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  BuyerResource::collection(Buyer::all());
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
    public function store(BuyerRequest $request)
    {
        $var = Buyer::create([
            $request->all()
        ]);
        return response([
            'data' => new BuyerResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buyer  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $var)
    {
        return new BuyerResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buyer  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buyer  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new BuyerResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buyer  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $var)
    {
        $var->delete();
    }
}
