<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostRequest;
use App\Slider;
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
        $lastSliders = Slider::latest()->take(1)->get();

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();

        $title = '';

        return view('guest.welcome')->with('lastPosts', $lastPosts)->with('title', $title)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2)->with('lastSliders', $lastSliders);
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

        $title = $event->title;

        return view('guest.events', compact('event'))->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('title', $title);
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

        $title = $post->titleh1;
        if(is_null($post))
        {
            return view('errors.noRecords');
        }    
        return view('guest.post', compact('post'))->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('title', $title);
    }

    public function services()
    {
        $lastSliders = Slider::latest()->take(1)->get();

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $title = 'Servicios';

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();
        return view('guest.services')->with('title', $title)->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2)->with('lastSliders', $lastSliders);
    }

    public function aboutUs()
    {
        $lastSliders = Slider::latest()->take(1)->get();

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $title = 'Sobre Nosotros';

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();
        return view('guest.about_us')->with('title', $title)->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2)->with('lastSliders', $lastSliders);
    }

    public function offices()
    {
        $lastSliders = Slider::latest()->take(1)->get();

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $title = 'Oficinas';

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();
        return view('guest.offices')->with('title', $title)->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2)->with('lastSliders', $lastSliders);
    }

    public function training()
    {
        $lastSliders = Slider::latest()->take(1)->get();

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $title = 'Formación';

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();
        return view('guest.training')->with('title', $title)->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2)->with('lastSliders', $lastSliders);
    }

    public function team()
    {
        $lastSliders = Slider::latest()->take(1)->get();

        $lastPosts= Post::latest()->take(2)->get();
        
        $lastEvents = Event::latest()->take(2)->get();

        $title = 'Equipo';

        $lastEvents2 = Event::latest()->skip(2)->take(2)->get();
        return view('guest.team')->with('title', $title)->with('lastPosts', $lastPosts)->with('lastEvents', $lastEvents)->with('lastEvents2', $lastEvents2)->with('lastSliders', $lastSliders);
    }


}
