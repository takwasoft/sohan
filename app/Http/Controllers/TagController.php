<?php

namespace App\Http\Controllers;

use App\Model\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Resources\Tag\TagResource;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  TagResource::collection(Tag::all());
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
    public function store(TagRequest $request)
    {
        $var = Tag::create([
            $request->all()
        ]);
        return response([
            'data' => new TagResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $var)
    {
        return new TagResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new TagResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $var)
    {
        $var->delete();
    }
}
