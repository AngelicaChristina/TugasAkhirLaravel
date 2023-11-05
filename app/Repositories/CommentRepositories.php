<?php

namespace App\Repositories;
use App\Models\Comment;

class CommentRepositories
{
    public function __construct(Comment $comment){
        //menerima objek Brand(parameter) & disimpan dlm properti $this->brand
        $this->comment = $comment;
    }

    public function get() //buat ngambil semua data dr database
    {
        return $this->comment->all();

    } 

    public function tambahComment($title, $description, $name, $commentt)
    {
        try{
           $comment = $this->comment->create([
            "title"=> $title,
            "description"=> $description,
            "name"=> $name,
            "commentt"=> $commentt
        ]); 
        return true;
        }catch (\Throwable $e){
            return false;
        }
        

        return $comment;

    }

    public function updateComment($comment){
        $update = $this->comment->where('title',$comment->title)->update([
            'description'=>$comment->description,
            'name'=>$comment->name,
            'commentt'=>$comment->commentt,
        ]);
        return $update;
    }
 

    public function deleteData($comment){
        $delete = $this->comment->where('id',$comment)->delete();
        return $delete;
    }
    
}


?>