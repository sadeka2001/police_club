<?php

namespace App\Http\Controllers\Backend;


use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_info=Service::all();
        return view('Backend.Service.index',compact('service_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Service.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'service_tittle' => 'required',
            'service_subtittle' => 'required',
            'service_image' => 'required',
        ]);

        $service = new Service();

        $service->service_tittle = $request->service_tittle;
        $service->service_subtittle = $request->service_subtittle;

        if ($request->hasFile('service_image')) {

            $file = $request->file('service_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/service', $fileName);
            $service->service_image = $fileName;
        }

        $service->save();
        return redirect('admin/service');
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
            $service = Service::find($id);
            return view('Backend.Service.edit',compact('service'));

        }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        $service->service_tittle = $request->service_tittle;
        $service->service_subtittle = $request->service_subtittle;
        $service->status=$request->status;

            if ($request->hasFile('service_image')) {

                $file = $request->file('service_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/service', $fileName);
                $service->service_image = $fileName;

            }
            $service->save();
            return redirect('admin/service');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $service=Service::find($id);
      $service->delete();
      return redirect('admin/service');
    }
}
