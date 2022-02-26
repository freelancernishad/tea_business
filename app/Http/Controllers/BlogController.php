<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog_category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $rows = Blog::paginate(10);
// echo '<pre>';
// print_r($productCategory);
//         die();
   
         $rows = Blog::paginate(10);
        return view('dashboard/blogs/posts.list',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['form_type'] = 'new';

        $table =  DB::getSchemaBuilder()->getColumnListing('blogs');
        $row = [];
        foreach ($table as $rowname) {
            $row[$rowname] = '';
        };

        $rows = json_decode(json_encode($row));

        $cat = Blog_category::all();

        return view('dashboard/blogs/posts.add',compact('rows','cat'),$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->except(['_token']);
        Blog::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $rows =  $blog;

        return view('dashboard/blogs/posts.view',compact('rows'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $cat = Blog_category::all();

        $rows =  $blog;
        $data['form_type'] = 'edit';
        return view('dashboard/blogs/posts.add',compact('rows','cat'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = request()->except(['_token','_method']);
        $blog->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
    }
}
