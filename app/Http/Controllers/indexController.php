<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Http\Requests\PostRequest;
use App\Event;

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

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();

        return view('welcome')->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $url = \URL::action('indexController@store');

        $tags = Tag::lists('name', 'id');

        return view('posts.postform', compact('tags'))->with('url', $url)->with('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostRequest $request)
    {

        $file = \Input::file('pic_url');

        $file->move(public_path().'/postimages/', $file->getClientOriginalName());

        $post = new Post($request->all());
        
        $postSaved = \Auth::user()->post()->save($post);

        $postSaved->tags()->attach($request->input('tags'));
        
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

        return view('posts.posts')->with('lastPosts', $lastPosts);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Post $lastPost)
    {

        if(is_null($lastPost))
        {
            return view('errors.noRecords');
        }    

        return view('posts.readPost')->with('lastPost', $lastPost);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::lists('name', 'id');

        if(is_null($post))
        {
            return view('errors.noRecords');
        }

        return view('posts.editpost', compact('post', 'tags'));

        
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

        $post->tags()->sync($request->input('tags'));

        \Session::flash('flash_message_updated', 'Tu post ha sido actualizado');

        return redirect('posts');
    }

    /**
     * Sync the tag list on the DB
     */

    private function syncTags(Post $post, array $tags)
    {
        $post->tags()->sync($tags);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Post $post)
    { 

        $postStatus = $post->delete();

        if($postStatus)
        {
            \Session::flash('flash_message_destroyed', 'Tu post ha sido borrado');
            
            return redirect('posts');
        }

        \Session::flash('flash_message_destroyFailed', 'Tu post no ha podido ser eliminado');

        return redirect('posts');
    }

}
