<?php

namespace App\Repositories;
use App\Models\Blog;

class BlogRepositories
{
    public function __construct(Blog $blog){
        //menerima objek Brand(parameter) & disimpan dlm properti $this->brand
        $this->blog = $blog;
    }

    public function get() //buat ngambil semua data dr database
    {
        return $this->blog->all();
        // $brand = Brand::find($id);
        // return $brand;
    } 

    public function tambahBlog($title, $description, $name)
    {
        try{
           $blog = $this->blog->create([
            "title"=> $title,
            "description"=> $description,
            "name"=> $name
        ]); 
        return true;
        }catch (\Throwable $e){
            return false;
        }
        

        return $blog;

    }

    public function updateBlog($blog){
        $update = $this->blog->where('title',$blog->title)->update([
            'description'=>$blog->description,
            'name'=>$blog->name,
        ]);
        return $update;
    }
 

    public function deleteData($blog){
        $delete = $this->blog->where('id',$blog)->delete();
        return $delete;
    }
    
}


?>