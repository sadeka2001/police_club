<?php

namespace App\Http\Controllers\Backend;

use App\Models\General;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $general_info = General::all();
        return view('backend.General.index', compact('general_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.General.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'home_tittle' => 'required',
            'home_des' => 'required',
            'msg_title' => 'required',
            'msg_author' => 'required',
            'msg_desc' => 'required',
            'gallery_des' => 'required',
            'news_des' => 'required',
            'client_des' => 'required',
            'member_des' => 'required',
            'about_des' => 'required',
            'service_des' => 'required',
            // 'logo'=>'image',

            'mobile' => 'required',
            'email' => 'required|unique:generals',
            'address' => 'required',
            'map' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'instragam' => 'required',


        ]);

        $general_info = new General;

        $general_info->home_tittle = $request->home_tittle;
        $general_info->home_des = $request->home_des;
        $general_info->msg_title = $request->msg_title;
        $general_info->msg_author = $request->msg_author;
        $general_info->msg_desc = $request->msg_desc;
        $general_info->gallery_des = $request->gallery_des;
        $general_info->news_des = $request->news_des;
        $general_info->client_des = $request->client_des;
        $general_info->member_des = $request->member_des;
        $general_info->about_des = $request->about_des;
        $general_info->service_des = $request->service_des;

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/general', $fileName);
            $general_info->logo= $fileName;
        }
        $general_info->mobile = $request->mobile;
        $general_info->email = $request->email;
        $general_info->address = $request->address;
        $general_info->map = $request->map;
        $general_info->facebook = $request->facebook;
        $general_info->twitter = $request->twitter;
        $general_info->linkedin = $request->linkedin;
        $general_info->instragam = $request->instragam;



        $general_info->save();
        return redirect('admin/general');
        // ->with('message','Successfully');

        // if ($request->hasFile('logo')){
        //     $slug = str_slug($request->fullname);
        //     $image = $request->file('logo');
        //     $file_name = $slug. '_' . time();
        //     $upload_path = 'uploads/logo/';
        //     $filePath = $upload_path . $file_name. '.'. $image->getClientOriginalExtension();
        //     $image_url = $upload_path . $filePath;
        //     $image->move($upload_path, $image_url);
        //     $general_info->update([
        //         'logo' =>$filePath
        //     ]);
        // }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $general_info = General::find($id);
        return view('backend.General.edit', compact('general_info'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'home_tittle' => 'required',
        //     'home_des' => 'required',
        //     'msg_title' => 'required',
        //     'msg_author' => 'required',
        //     'msg_desc' => 'required',
        //     'gallery_des' => 'required',
        //     'news_des' => 'required',
        //     'client_des' => 'required',
        //     'member_des' => 'required',
        //     'about_des' => 'required',
        //     'service_des' => 'required',
        //     // 'logo'=>'image',

        //     'mobile' => 'required',
        //     'email' => 'required|unique:generals',
        //     'address' => 'required',
        //     'map' => 'required',
        //     'facebook' => 'required',
        //     'twitter' => 'required',
        //     'linkedin' => 'required',
        //     'instragam' => 'required',


        // ]);

        $general_info =General::find($id);

        $general_info->home_tittle = $request->home_tittle;
        $general_info->home_des = $request->home_des;
        $general_info->msg_title = $request->msg_title;
        $general_info->msg_author = $request->msg_author;
        $general_info->msg_desc = $request->msg_desc;
        $general_info->gallery_des = $request->gallery_des;
        $general_info->news_des = $request->news_des;
        $general_info->client_des = $request->client_des;
        $general_info->member_des = $request->member_des;
        $general_info->about_des = $request->about_des;
        $general_info->service_des = $request->service_des;

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/general', $fileName);
            $general_info->logo = $fileName;
        }
        $general_info->map = $request->map;
        $general_info->mobile = $request->mobile;
        $general_info->email = $request->email;
        $general_info->address = $request->address;

        $general_info->facebook = $request->facebook;
        $general_info->twitter = $request->twitter;
        $general_info->linkedin = $request->linkedin;
        $general_info->instragam = $request->instragam;
        $general_info->status = $request->status;

        $general_info->save();
        return redirect('admin/general');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $general_info = General::find($id);
        $general_info->delete();
        return redirect('admin/general');
    }
}
