<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\post;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //store all the blog posts in a variable
	$posts=post::all();
	//return a view and pass in the above variable
	return view('posts.index')->withposts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
	$this->validate($request, array(
		'title'=>'required|max:255',
		'body'=>'required'
	));
	
	//store in the database
	$post = new post;
	$post->title = $request->title;
	$post->body = $request->body;
	$post->save();
	//session::flash('success','This post was successfully saved.');
	return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = post::find($id);
	return view('posts.show')->withpost($post); //or with('post',$post);
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as a variable
	$post = post::find($id);
	//return the view and pass in the var we previously created
	return view('posts.edit')->withpost($post);
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
        //validate the data 
	$this->validate($request, array(
		'title'=>'required|max:255',
		'body'=>'required'
	));
	//save the data to the database
	$post = post::find($id);
	$post->title = $request->input('title');
	$post->body = $request->input('body');
	$post->save();
	 
	//set flash data with success method
	//session::flash('success','This post was successfully saved.');
	//redirect with flash data to posts.show
	return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { //dd($id);
        $post=post::findorfail($id);
	$post->delete();
	return redirect()->route('posts.index');
    }
}
