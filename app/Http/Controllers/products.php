<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products=product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validate data
	//$this->validate($request, array(
	//	'name'=>'required|max:255',
	//	'dimension'=>'required',
	//	'weight'=>'required',
	//	'materialUsed'=>'required',
	//	'description'=>'required'
	//));
	
	//store in the database
	/*$product = new product;
	$product->name = $request->name;
	$product->dimension = $request->dimension;
	$product->weight = $request->weight;
	$product->materialUsed = $request->materialUsed;
	$product->description = $request->description;
	$product->save();
	//session::flash('success','This post was successfully saved.');*/
	//redirect	
	//return redirect()->route('products.show',$post->id);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
       //  $product = post::find($id);
	//return view('products.show')->withproduct($product); //or with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
