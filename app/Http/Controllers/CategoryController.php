<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\Category\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  CategoryResource::collection(Category::all());
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
    public function store(CategoryRequest $request)
    {
        $var = Category::create([
            $request->all()
        ]);
        return response([
            'data' => new CategoryResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Category $var)
    {
        return new CategoryResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new CategoryResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $var)
    {
        $var->delete();
    }
}
