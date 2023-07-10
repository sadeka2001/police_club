<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider_info = Slider::all();
        return view('backend.Slider.index', compact('slider_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $request->validate([
            'slider_title' => 'required',
            'slider_description' => 'required',
            'slider_image' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);

        $slider = new Slider();
        $slider->slider_tittle = $request->slider_title;
        $slider->slider_subtittle = $request->slider_description;
        if ($request->hasFile('slider_image')) {
            $file = $request->file('slider_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/slider', $fileName);
            $slider->slider_image = $fileName;
        }
        $slider->save();
        return redirect('admin/slider')->with('message', 'slider added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('Backend.Slider.edit', compact('slider'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $slider->slider_tittle = $request->slider_tittle;
        $slider->slider_subtittle = $request->slider_subtittle;
        $slider->status = $request->status;

        if ($request->hasFile('slider_image')) {

            $file = $request->file('slider_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/slider', $fileName);
            $slider->slider_image = $fileName;
        }
        $slider->save();
        return redirect('admin/slider');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('admin/slider');
    }
}
