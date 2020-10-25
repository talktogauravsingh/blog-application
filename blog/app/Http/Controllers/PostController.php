<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PostController extends Controller
{
    public function postdb(Request $request){
    	$result = DB::table('blogpost')->insert([
			    'post_title' => $request->postTitle, 
			    'post_content' => $request->postContent,
			    'post_category' => $request->postCategory,
			    'userid' => Auth::user()->id
			]);

    	return redirect('/dashboard');

    }

    public function postDetails(){
    	$resp = DB::table('blogpost')->where('userid', Auth::user()->id)->get();
    	return view('dashboard', ['bp'=>$resp]);
    }

    public function homePagePost($category = null){
    	$result = DB::table('blogpost');
        if ($category) {
            $result->where('post_category', $category);
        }
        
        $posts = $result->paginate(2);

    	return view('home',compact('posts'), ['cat'=>$category]);
    }

    public function deletePost($postId){
    	$delpost = DB::table('blogpost')->where('id', $postId)->delete();
        return redirect('/dashboard');

    }

    public function updatePost($postId){
		$idresp = DB::table('blogpost')->where('id', $postId)->first();
    	 return view('updatepost', ['ed'=>$idresp, 'postId'=> $postId]);
    }

    public function updatePostInDB($postId, Request $request){
        $upindb = DB::table('blogpost')
              ->where('id', $postId)
              ->update([
                'post_title' => $request->postTitle, 
			    'post_content' => $request->postContent,
			    'post_category' => $request->postCategory
            ]);

              return redirect('/dashboard');
    }

}
