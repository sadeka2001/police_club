<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery=Gallary::all();
        return view('backend.Gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'gallary_name' => 'required',

                'gallery_image' => 'required',
            ]);

            $gallery = new Gallary();

            $gallery->gallary_name = $request->gallary_name;


            if ($request->hasFile('gallery_image')) {

                $file = $request->file('gallery_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/Gallery', $fileName);
                $gallery->gallery_image = $fileName;
            }

            $gallery->save();
            return redirect('admin/gallery');

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
        $gallery=Gallary::find($id);
        return view('Backend.Gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $gallery =Gallary::find($id);

            $gallery->gallary_name = $request->gallary_name;


            if ($request->hasFile('gallery_image')) {

                $file = $request->file('gallery_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/Gallery', $fileName);
                $gallery->gallery_image = $fileName;
            }
            $gallery->status =$request->status;
            $gallery->save();
            return redirect('admin/gallery');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

        {
            $gallery=Gallary::find($id);
            $gallery->delete();
            return redirect('admin/gallery');
          }

}
