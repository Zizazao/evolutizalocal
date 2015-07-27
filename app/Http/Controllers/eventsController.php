<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;

use App\Event;
use App\User;

class eventsController extends Controller
{

    /**
     * 
     *
     */
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

        $events = Event::latest()->get();

        return view('events.events', compact('events'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(EventRequest $request)
    {
        $events = new Event($request->all());
        
        \Auth::user()->event()->save($events);

        
        \Session::flash('flash_message_event_created', 'Tu evento ha sido creado');

        return redirect()->action('eventsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Event  $event
     * @return Response
     */
    public function show(Event $event)
    {


        if(is_null($event))
        {
            return view('errors.noRecords');
        } 
        
        return view('events.read', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Event  $event
     * @return Response
     */
    public function edit(Event $event)
    {

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Event  $event
     * @param  EventRequest $request
     * @return Response
     */
    public function update(Event $event, EventRequest $request)
    {

        $event->update($request->all());

        \Session::flash('flash_message_event_updated', 'Tu evento ha sido actualizado');

        return redirect('events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Event  $event
     * @return Response
     */
    public function destroy(Event $event)
    {

        $eventStatus = $event->delete();

        if($eventStatus)
        {
            \Session::flash('flash_message_event_destroyed', 'Tu evento ha sido borrado');
            
            return redirect('events');
        }

        \Session::flash('flash_message_event_destroyFailed', 'Tu evento no ha podido ser eliminado');

        return redirect('events');
    }
}
