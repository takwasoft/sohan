<?php

namespace App\Http\Controllers;

use App\Model\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Resources\Brand\BrandResource;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  BrandResource::collection(Brand::all());
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
    public function store(BrandRequest $request)
    {
        $var = Brand::create([
            $request->all()
        ]);
        return response([
            'data' => new BrandResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $var)
    {
        return new BrandResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new BrandResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $var)
    {
        $var->delete();
    }
}
