<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\Product\ProductResource;
use DataTables;
use Illuminate\Support\Facades\URL;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::latest()->with('SubCategory')->get();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                            
                               $btn = '<div class="btn-group"><a href="'.URL::to('/').'/categories/'.$row->id.'/edit" class="btn btn-sm btn-outline-primary">Edit</a>
                               <button onclick="deleteData('.$row->id.')" class="btn btn-sm btn-outline-danger">Delete</button></div>';
         
                                return $btn;
                        })
                        ->addColumn('img', function($row){
                            
                            $btn = '<img style="width:60px" src="'.URL::to('/images/'.$row->image).'">';
      
                             return $btn;
                     })
                        ->rawColumns(['action'])
                        ->escapeColumns([])
                        ->make(true);
            
                    }
                    $thead='<th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Parent Category</th>
                    ';
                    $columns="{data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'img', name: 'img'},
                    {data: 'description', name: 'description'},
                    {data: 'sub_category.name', name: 'sub_category.name'},";
                    return view('table.data',["columns"=>$columns,"thead"=>$thead,"layout"=>'seller.master','ajax'=>'categories','title'=>'Category List']);
        

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
    public function store(ProductRequest $request)
    {
        $var = Product::create([
            $request->all()
        ]);
        return response([
            'data' => new ProductResource($var)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $var
     * @return \Illuminate\Http\Response
     */
    public function show(Product $var)
    {
        return new ProductResource($var);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $var
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $var)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $var
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $var)
    {
        //
        $var->update($request->all());
        return response([
            'data' => new ProductResource($var)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $var
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $var)
    {
        $var->delete();
    }
}
