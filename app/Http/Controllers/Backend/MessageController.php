<?php

namespace App\Http\Controllers\Backend;

use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = Message::all();
        return view('backend.Message.index',compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:messages',
            'subject' => 'required',


        ]);

        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;


        $message->save();
        return redirect('admin/message');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$id)
    {
        if($request){
            $messages = Message::where('id', $id)->first();
            $messages->status = 1;
            $messages->save();
        }
        
        $data['messageInfo'] = Message::findOrFail($id);
        // dd($data);
        return view('backend.Message.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $message = Message::find($id);
        $message->delete();
        return redirect('admin/message');
    }
}
