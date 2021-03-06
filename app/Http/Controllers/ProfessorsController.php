<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use App\Posts;
use Auth;
use Validator;

class ProfessorsController extends Controller
{
    //
    function index(){
    	$professors = Professor::all();
    	//dd($professors);
    	return view('professor-list',['professors' =>$professors]);
    }

    function add(){

    	$prof = new Professor();

    	$prof->name = request('professor');
    	$prof->university = request('university');


    	$prof->save();

    	//dd($prof);
    	return redirect('/professors');
    }


    function showReviews($profID){
    	$reviews = Posts::where('professor', $profID)->get();
    	$prof = Professor::where('ProfessorId', $profID)->first();
    	// dd($reviews);
    	return view('review-list', ['reviews'=> $reviews, 'professor'=>$prof]);
    }

    function write($profID){
    	$prof = Professor::where('ProfessorId', $profID)->first();
    	return view('write-review', ['professor'=>$prof]);

    }

    function storeReviews($profID){
        $validation = Validator::make([
            'comment' => request('comment')
        ], [
            'comment' => 'required|min:3'
        ]);

        if($validation->passes()){
            $post = new Posts();
            $user = Auth::user();
            $prof = Professor::where('ProfessorId', $profID)->first();
            $post->user = $user->id;
            $post->professor = $profID;
            $post->comment = request('comment');

            $post->save();
            return redirect('/professors');

        }
        else{
            return redirect("/posts/$profID/write")
                ->withInput()
                ->withErrors($validation);
        }
    	
    	//dd($profID);

    	
    }
}
