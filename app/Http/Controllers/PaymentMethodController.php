<?php

namespace App\Http\Controllers;

use App\Model\PaymentMethod;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentMethodRequest;
use App\Http\Resources\PaymentMethod\PaymentMethodResource;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  PaymentMethodResource::collection(PaymentMethod::all());
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
    public function store(PaymentMethodRequest $request)
    {
        $var = PaymentMethod::create([
            $request->all()
        ]);
        return response([
            'data' => new PaymentMethodResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethod  $var
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $var)
    {
        return new PaymentMethodResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethod  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethod  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethod $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new PaymentMethodResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethod  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $var)
    {
        $var->delete();
    }
}
