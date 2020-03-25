<?php

namespace App\Http\Controllers;

use App\Model\Size;
use Illuminate\Http\Request;
use App\Http\Requests\SizeRequest;
use App\Http\Resources\Size\SizeResource;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  SizeResource::collection(Size::all());
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
    public function store(SizeRequest $request)
    {
        $var = Size::create([
            $request->all()
        ]);
        return response([
            'data' => new SizeResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Size $var)
    {
        return new SizeResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Size  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Size $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new SizeResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $var)
    {
        $var->delete();
    }
}
