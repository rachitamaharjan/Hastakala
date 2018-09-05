<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\product;

class artistController extends Controller
//use product
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        return view('artists.newProfile');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->name);
	$artist = $request->all();
	//{!! Helper::store(112233)!!}
	//->first() !!}
	//echo(artist =>name);
	\App\artist::create($artist);
	//return redirect('artists');
	//return redirect()->action('artists.show');
	//return redirect()->action('artists.show', ['id' => 1]);
	return view('artists.artist')->withartist($artist);
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
       $artist = User::find($id);
	return view('artists.artist')->withartist($artist); //or with('artist',$artist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = User::find($id);
	return view('artists.editProfile')->withartist($artist);
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
	$artist = \App\User::find($id);
	$artist->name = $request->name;
	$artist->profilepic = $request->profilepic;
	//$artist->coverpic = $request->coverpic;
	$artist->thingsimake = $request->thingsimake;
	$artist->link = $request->link;
	$artist->email = $request->email;
	$artist->phone = $request->phone;
	$artist->description = $request->description;
	$artist->save();
	//return redirect('artists');
	return redirect()->route('artists.show',$id);
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
        $artist=User::findorfail($id);
	$artist->delete();
	return redirect('products');
    }
}
