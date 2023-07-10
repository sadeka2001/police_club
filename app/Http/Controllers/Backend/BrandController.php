<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand_info=Brand::all();
        return view('Backend.Brand.index',compact('brand_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $request->validate([
                'brand_name' => 'required',

                'brand_image' => 'required',
            ]);

            $news = new Brand();

            $news->brand_name = $request->brand_name;


            if ($request->hasFile('brand_image')) {

                $file = $request->file('brand_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/Brand', $fileName);
                $news->brand_image = $fileName;
            }

            $news->save();
            return redirect('admin/brands');

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
        $brand=Brand::find($id);
        return view('Backend.Brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $brand =Brand::find($id);

           $brand->brand_name = $request->brand_name;


            if ($request->hasFile('brand_image')) {

                $file = $request->file('brand_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/Brand', $fileName);
                $brand->brand_image = $fileName;
            }
            $brand->status =$request->status;
            $brand->save();
            return redirect('admin/brands');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

        {
            $brand=Brand::find($id);
            $brand->delete();
            return redirect('admin/brands');
          }

}
