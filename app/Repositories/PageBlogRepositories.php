<?php

namespace App\Repositories;
use App\Models\PageBlog;

class PageBlogRepositories
{
    public function __construct(PageBlog $pageBlog){
        //menerima objek Brand(parameter) & disimpan dlm properti $this->brand
        $this->pageBlog = $pageBlog;
    }

    public function get() //buat ngambil semua data dr database
    {
        return $this->pageBlog->all();
        // $brand = Brand::find($id);
        // return $brand;
    } 

    // public function tambahBlog($title, $description, $name)
    // {
    //     try{
    //        $blog = $this->blog->create([
    //         "title"=> $title,
    //         "description"=> $description,
    //         "name"=> $name
    //     ]); 
    //     return true;
    //     }catch (\Throwable $e){
    //         return false;
    //     }
        

    //     return $blog;

    // }

    // public function updateBlog($blog){
    //     $update = $this->blog->where('title',$blog->title)->update([
    //         'description'=>$blog->description,
    //         'name'=>$blog->name,
    //     ]);
    //     return $update;
    // }
 

    // public function deleteData($blog){
    //     $delete = $this->blog->where('id',$blog)->delete();
    //     return $delete;
    // }
    
}


?>