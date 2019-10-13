<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\EditPostRequest;
use App\Http\Requests\PostsRequest;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Gate;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isAdmin()) {
            $posts = Post::paginate(5);
        }else{
            $posts = Post::where('user_id', Auth::user()->id)->paginate(5);
        }
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {

        $input = $request->all();
        $user = Auth::user();

        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('img', $name);
            $photo = Photo::create(['path' => $name]);
            $input['photo_id'] = $photo->id;

        }
        $user->posts()->create($input);
        return redirect('/admin/posts');


//        $user = Auth::user();
//
//        $user->posts()->create($request->all());
//
//        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments()->get();

        $this->authorize('any', $post);
        return view('post', compact('post', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $post = Post::findOrFail($id);
        $this->authorize('any', $post);

        return view('admin.posts.edit', compact('post'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, $id)
    {
        $input = $request->all();

        $post = Auth::user()->posts()->where('id', $id)->first();
        $this->authorize('any', $post);


        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('img', $name);
            $photo = Photo::create(['path' => $name]);
            $input['photo_id'] = $photo->id;
        }

        $post->update($input);
        return redirect('admin/posts');
//
//
//        $post = Post::findOrFail($id);
//        $post->update($request->all());
//
//        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('any', $post);

        $post->delete();

        Session::flash('deleted_post', 'Post has been deleted');

        return redirect('admin/posts');
    }

    public function posts(){
        $posts = Post::all();

        return view('posts', compact('posts'));
    }
}
