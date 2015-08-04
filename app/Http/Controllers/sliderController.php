<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSliderRequest;
use App\Slider;

class sliderController extends Controller
{
    /**
     * Only users can access this methods
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lastSliders = Slider::latest()->get();


        return view('slider.index')->with('lastSliders', $lastSliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateSliderRequest  $request
     * @return Response
     */
    public function store(CreateSliderRequest $request)
    {
        $slider = new Slider($request->all());

        $sliderSaved = \Auth::user()->slider()->save($slider);

        return redirect()->action('sliderController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Slider  $slider
     * @return Response
     */
    public function edit(Slider $Slider)
    {

        return view('slider.edit', compact('Slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CreateSliderRequest  $request
     * @param  Slider  $slider
     * @return Response
     */
    public function update(Slider $slider, CreateSliderRequest $request)
    {
        $slider->update($request->all());

        return redirect()->action('sliderController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Slider $slider)
    {
        $sliderStatus = $slider->delete();

        return redirect()->action('sliderController@index');
    }
}
