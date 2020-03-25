<?php

namespace App\Http\Controllers;

use App\Model\SupplierCategory;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierCategoryRequest;
use App\Http\Resources\SupplierCategory\SupplierCategoryResource;

class SupplierCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  SupplierCategoryResource::collection(SupplierCategory::all());
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
    public function store(SupplierCategoryRequest $request)
    {
        $var = SupplierCategory::create([
            $request->all()
        ]);
        return response([
            'data' => new SupplierCategoryResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierCategory $var)
    {
        return new SupplierCategoryResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupplierCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierCategory $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupplierCategory $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new SupplierCategoryResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierCategory $var)
    {
        $var->delete();
    }
}
