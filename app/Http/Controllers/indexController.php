<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Http\Requests\PostRequest;

class indexController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }
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

        $tags = Tag::lists('name');

        return view('postform', compact('tags'))->with('url', $url)->with('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post($request->all());

        $tagIds = $request->input('tags');  //just need to store the ids records for tags

        $post->tags()->attach($tagIds);
        
        \Auth::user()->post()->save($post);

        \Session::flash('flash_message', 'Tu post ha sido creado');

        return redirect()->action('indexController@showAll');
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
    public function show(Post $lastPost)
    {
        //$lastPost = Post::find($id);

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
    public function edit(Post $post)
    {

        if(is_null($post))
        {
            return view('errors.noRecords');
        }

        return view('editPost', compact('post'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Post $post, PostRequest $request)
    {
        $post->update($request->all());

        \Session::flash('flash_message_updated', 'Tu post ha sido actualizado');

        return redirect('posts');
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
