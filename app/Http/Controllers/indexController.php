<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\CreatePostRequest;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        

        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $url = \URL::action('indexController@store');
        return view('postform')->with('url', $url);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post;
        $post->titleh1 =\Input::get('titleh1');
        $post->head =\Input::get('head');
        $post->pic_url =\Input::get('pic_url');
        $post->body =\Input::get('body');
        $post->tags =\Input::get('tags');
        $post->user()->associate(\Auth::user());
        $post->save();

        return redirect()->action('indexController@index');
    }

    /**
     * Show all last posts.
     *
     * @param  int  $id
     * @return Response
     */
    public function showAll()
    {
        $lastPosts = Post::latest()->get();

        return view('posts')->with('lastPosts', $lastPosts);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $lastPost = Post::find($id);

        if(is_null($lastPost))
        {
            return view('errors.noRecords');

        }    

        return view('readPost')->with('lastPost', $lastPost);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
