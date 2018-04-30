<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Posts;
use Validator;

class PostController extends Controller
{
    //
    function myPosts(){
    	$user = Auth::user();
    	$posts = Posts::where('user',$user->id)->get();

    	return view('myposts', ['posts'=>$posts]);

    }

    function delete($postId){
    	$post = Posts::find($postId);

    	$post->delete();

    	return redirect('/myreviews');
    }

    function edit($postId){
    	$post = Posts::find($postId);

    	return view('edit-review', ['post'=>$post]);
    }

    function updatePost($postID){
    	$validation = Validator::make([
            'comment' => request('comment')
        ], [
            'comment' => 'required|min:3'
        ]);

        if($validation->passes()){
        	$post = Posts::find($postID);
	    	$post->comment = request('comment');
	    	$post->save();

	    	return redirect('/myreviews');
        }


        else {
            return redirect("/edit/$postID")
                ->withInput()
                ->withErrors($validation);
        }

    }
}
