<?php

namespace App\Http\Controllers;

use App\Model\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Resources\SubCategory\SubCategoryResource;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  SubCategoryResource::collection(SubCategory::all());
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
    public function store(SubCategoryRequest $request)
    {
        $var = SubCategory::create([
            $request->all()
        ]);
        return response([
            'data' => new SubCategoryResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $var)
    {
        return new SubCategoryResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new SubCategoryResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $var)
    {
        $var->delete();
    }
}
