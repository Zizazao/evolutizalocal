<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostRequest;
use App\Slideritem;
use App\Event;

class guestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lastSliders = Slideritem::latest()->take(1)->get();

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();

        return view('guest.welcome')->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2);
    }

    /**
     * Display the specified events resource.
     *
     * @param  Event  $event
     * @return Response
     */
    public function showEvent(Event $event)
    {
        $lastPosts = Post::latest()->get();

        $lastEvents = Event::latest()->get();

        return view('guest.events', compact('event'))->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents);
    }

    /**
     * Display the specified post resource.
     *
     * @param  Post  $post
     * @return Response
     */
    public function showPost(Post $post)
    {

        $lastPosts = Post::latest()->take(4)->get();

        $lastEvents = Event::latest()->take(4)->get();

        if(is_null($post))
        {
            return view('errors.noRecords');
        }    
        return view('guest.post', compact('post'))->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents);
    }


}
