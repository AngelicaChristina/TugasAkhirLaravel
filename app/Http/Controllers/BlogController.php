<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Repositories\BlogRepositories;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(BlogRepositories $blog){
        //konstruktor dari controller yg menerima objek BrandRepositories sbg parameter dan disimpan dalam properti $this->brandRepositories. 
        //Konstruktor ini dijalankan secara otomatis saat controller dibuat.
        $this->blogRepositories = $blog;
    }
    public function index()
    {
        $data = $this->blogRepositories->get();
        return view("Blog/index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->blogRepositories->tambahBlog($request->title,$request->description,$request->nama);

        if ($data) {
            return redirect()->route('blog'); //value bisa bawa data, redirect gabisa bawa data
        } else {
            return redirect()->back()->withInput(request()->all())->withErrors("messages" , "Gagal");
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        // dd($brand);
        return view("Blog.edit", compact("blog"));
        //trs balik ke tampilan brand/edit dgn dat yg ditemukan
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog = $this->blogRepositories->updateBlog($request);
        if ($blog == true){
            return redirect()->route('blog'); //jika berhasil diarahin ke route brand
        } else {
            return redirect()->back()->withErrors("messages", 'gagal'); //jika gagal balik ke sblmnya
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepositories->deleteData($id);
        return redirect()->route('blog');
    }
}
