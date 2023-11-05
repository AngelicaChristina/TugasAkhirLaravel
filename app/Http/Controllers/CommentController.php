<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Repositories\CommentRepositories;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(CommentRepositories $comment){
        //konstruktor dari controller yg menerima objek BrandRepositories sbg parameter dan disimpan dalam properti $this->brandRepositories. 
        //Konstruktor ini dijalankan secara otomatis saat controller dibuat.
        $this->commentRepositories = $comment;
    }
    public function index()
    {
        $data = $this->commentRepositories->get();
        return view("Comment/index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Comment.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->commentRepositories->tambahComment($request->title,$request->description,$request->nama,$request->comment);

        if ($data) {
            return redirect()->route('comment'); //value bisa bawa data, redirect gabisa bawa data
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
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        // dd($brand);
        return view("Comment.edit", compact("comment"));
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
        // $blog = $this->blogRepositories->updateB($request);
        // if ($blog == true){
        //     return redirect()->route('blog'); //jika berhasil diarahin ke route brand
        // } else {
        //     return redirect()->back()->withErrors("messages", 'gagal'); //jika gagal balik ke sblmnya
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = $this->commentRepositories->deleteData($id);
        return redirect()->route('blog');
    }
}
