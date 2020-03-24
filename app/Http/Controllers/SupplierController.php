<?php

namespace App\Http\Controllers;

use App\Model\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;
use App\Http\Resources\Supplier\SupplierResource;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  SupplierResource::collection(Supplier::all());
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
    public function store(SupplierRequest $request)
    {
        $var = Supplier::create([
            $request->all()
        ]);
        return response([
            'data' => new SupplierResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $var)
    {
        return new SupplierResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new SupplierResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $var)
    {
        $var->delete();
    }
}
