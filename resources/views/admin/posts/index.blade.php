
@extends('layouts.admin')


@section('content')


    <div class="col-sm-11">

        @if(\Illuminate\Support\Facades\Session::has('deleted_post'))

            <p class="bg-danger">{{session('deleted_post')}}</p>
            @endif

            @if(count($posts)>0)

        <h1>All Posts</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Edit post</th>
                    <th scope="col">View post</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                    <th scope="col">View comments</th>
                    @endif
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                <tr class="postspicssize">
                    <th scope="row">{{$post->id}}</th>
                    <td><img src="{{$post->photo ? url('img/'.$post->photo->path) : 'http://placehold.it/200x200'}}"> </td>
                    <td>{{$post->user ? $post->user->name : "No name"}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">Edit post </a> </td>
                    <td><a href="{{route('home.post', $post->id)}}">View post </a> </td>
                    @if(\Illuminate\Support\Facades\Auth::user()->isAdmin())
                        <td><a href="{{route('admin.comments.show', $post->id)}}">View comments </a> </td>
                    @endif
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
                @endforeach

                </tbody>
            </table>

                <div class="text-center d-flex justify-content-center">
                    {{ $posts->render()  }}
                </div>

            @else
                <h1>No posts</h1>
            @endif
    </div>



@stop