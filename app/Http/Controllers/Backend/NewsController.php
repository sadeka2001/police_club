<?php

namespace App\Http\Controllers\Backend;


use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_info=News::all();
        return view('backend.News.index',compact('news_info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.News.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'news_tittle' => 'required',
            'news_desc' => 'required',
            'news_image' => 'required',
        ]);

        $news = new News();

        $news->news_tittle = $request->news_tittle;
        $news->news_desc = $request->news_desc;

        if ($request->hasFile('news_image')) {

            $file = $request->file('news_image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/news', $fileName);
            $news->news_image = $fileName;
        }

        $news->save();
        return redirect('admin/news');
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
            $news = News::find($id);
            return view('Backend.News.edit',compact('news'));

        }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);

        $news->news_tittle = $request->news_tittle;
        $news->news_desc = $request->news_desc;
        $news->status=$request->status;

            if ($request->hasFile('news_image')) {

                $file = $request->file('news_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/news', $fileName);
                $news->news_image = $fileName;

            }
            $news->save();
            return redirect('admin/news');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news=News::find($id);
        $news->delete();
      return redirect('admin/news');
    }
}
