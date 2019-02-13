<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function index() 
	{
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(4);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->get();

        $data = array(
            'posts' => $posts,
            'archives' => $archives
		);
		
        return view('posts/list', $data);
    }
	
    public function authorIndex() 
	{
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(4);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->get();

        $data = array(
            'posts' => $posts,
            'archives' => $archives
		);
		
        return view('posts/index', $data);
    }	
	
    public function create() 
	{
		return view('posts.create');
    }	

    public function insert(Request $request)
	{
        $this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
				
        if($request->hasfile('filename'))
        {
			foreach($request->file('filename') as $image)
			{
				$thumbnail=$image->getClientOriginalName();
				$image->move(public_path().'/images/', $thumbnail);  
			}
        }

		$post = new Post(array(
			'title' => Input::get('title'),
			'description' => Input::get('description'),
			'author' => Auth::user()->id,
			'thumbnail' => $thumbnail
		));			
			
		try{
			$post -> save();
			return redirect()->route('home')->with('success', 'Post has been successfully added!');
		}
		catch(\Exception $e){
			echo $e->getMessage();
		}
    }
	
    public function show($id)
	{
        $post = Post::find($id);
        return view('posts.view', ['post' => $post]);
    }	
	
    public function edit($id) 
	{
        $post = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->where('posts.id', '=', $id)->first();
        return view('posts/edit', ['post' => $post]);
    }

    public function update(Request $request, $id) 
	{
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('home')->with('success', 'Post has been updated successfully!');
    }

    public function destroy($id) 
	{
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Post has been deleted successfully!');
    }

    public function read($id) 
	{
        $post = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->where('posts.id', '=', $id)->first();
        return view('posts.read', ['post' => $post]);
    }
}