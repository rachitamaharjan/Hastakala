<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use Illuminate\Support\Facades\Auth;
use App\User;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
if($user=Auth::user()){
	$user=Auth::user();
	
        $products=$user->products;

	return view('artists.artistUser',compact('products'));}
else{
	$products=product::all();
	return view('categories.category',compact('products'));
}
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
	 
	$product = $request->all();
	$user=Auth::user();
	$user->products()->create($product);
	
		
	return redirect('products');

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
	 //$artist = artist::find($id);
if($user=Auth::user()){
	$user=Auth::user();
       $product=$user->find($id);
	return view('items.product')->withproduct($product); 
}else{
$product=product::find($id);
return view('display.product')->withproduct($product); 
}//or with('product',$product);
    }
   public function lshow($id)
    {
	dd($id);
	 //$artist = artist::find($id);
	$user=User::find($id);
	$product = $user->products();
	return view('display.product')->withproduct($product); //or with('product',$product);}

       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
	$user=Auth::user();
	$product=$user->products()->find($id);
	return view('items.editProduct')->withproduct($product);
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
	//dd($id);
	//dd($request->all());
	//$new = $request->all();
        //$product = product::find($id);
        //$old->update($product);
//blog way
	//$product= fill($new);
	//$product->save();
//laravel.com :this one works, finally!!
	
	$user=Auth::user();
	$product=$user->products()->find($id);
	$product->name = $request->name;
	$product->dimension = $request->dimension;
	$product->weight = $request->weight;
	$product->materialUsed = $request->materialUsed;
	$product->description = $request->description;
	$product->save();
//some site
	//$input = $request->all();

    //$product->fill($new)->save();
	//\App\product::create($product);
	return redirect('products');
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
       
	$user=Auth::user();
	$product=$user->products()->find($id);
	//dd($product);
	$product->delete();
	return redirect()->route('products.index');
    }
}
