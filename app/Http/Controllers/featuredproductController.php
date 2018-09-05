<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\featuredProduct;

class featuredproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=\App\featuredProduct::all();
	return view('admin.featuredproduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->all();
	//dd($request);
	
	$product['image1'] = $request->image1->store('public/featuredproduct');
	\App\featuredProduct::create($product);
	return redirect()->route('featuredproduct.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);

       $product = \App\featuredProduct::find($id);
	return view('admin.featuredproductprofile')->withproduct($product); //or with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\featuredProduct::find($id);
	return view('admin.editproduct')->withproduct($product);
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
	//dd($request);
        $product =\App\featuredProduct::find($id);
	$product->name = $request->name;
	$product->dimension = $request->dimension;
	$product->weight = $request->weight;
	$product->materialUsed = $request->materialUsed;
	$product->description = $request->description;
	$product->save();
	return redirect('/admin/product/featured');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //dd($id);
        $product=product::findorFail($id);
	//dd($product);
	$product->delete();
	return redirect()->route('featuredproduct.index');
    }
}
