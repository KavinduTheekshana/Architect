<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function addPost(){

    return $this->generateRandomString(10);
    //    $post = new Post();
    //    $post->title = "third Post Title";
    //    $post->body = "third Post description";
    //    $post->save();
    //    return $post->id;
    

   }


   function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


   public function addComment($id){
       $post = Post::find($id);
       $comment =  new Comment();
       $comment->comment = "This is sixth comment";
       $post->comments()->save($comment);
       return "Comment Posted";
   }
   public function getCommentsByPost($id)
   {
       $comments = Post::find($id)->comments;
       return $comments;
   }
}
