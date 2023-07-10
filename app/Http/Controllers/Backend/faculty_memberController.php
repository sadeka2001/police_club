<?php

namespace App\Http\Controllers\Backend;

use App\Models\Faculty_member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class faculty_memberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculty_member = Faculty_member::all();
        return view('backend.Faculty_member.index',compact('faculty_member'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Faculty_member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'member_details' => 'required',

            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'youtube' => 'required',


        ]);

        $faculty_member = new Faculty_member;
        $faculty_member->name = $request->name;
        $faculty_member->designation = $request->designation;
        $faculty_member->member_details = $request->member_details;
        $faculty_member->facebook = $request->facebook;
        $faculty_member->twitter = $request->twitter;
        $faculty_member->linkedin= $request->linkedin;
        $faculty_member->youtube = $request->youtube;

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/Member', $fileName);
            $faculty_member->image= $fileName;
        }

       $faculty_member->save();
        return redirect('admin/facultymember');


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
        $faculty_member = Faculty_member::find($id);
        return view('backend.Faculty_member.edit',compact('faculty_member'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $faculty_member=Faculty_member::find($id);

        $faculty_member->name = $request->name;
        $faculty_member->designation = $request->designation;
        $faculty_member->member_details = $request->member_details;
        $faculty_member->facebook = $request->facebook;
        $faculty_member->twitter = $request->twitter;
        $faculty_member->linkedin = $request->linkedin;
        $faculty_member->youtube = $request->youtube;

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/Member', $fileName);
            $faculty_member->image= $fileName;
        }

         $faculty_member->status = $request->status;

         $faculty_member->save();
        return redirect('admin/facultymember');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $faculty_member = Faculty_member::find($id);
       $faculty_member->delete();
        return redirect('admin/facultymember');
    }
}
