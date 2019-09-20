@extends('layouts.admin')


@section('content')

    @if(\Illuminate\Support\Facades\Session::has('deleted_commentar'))

        <p class="bg-danger">{{session('deleted_commentar')}}</p>
        @endif

    @if(count($comments) > 0)

    <div class="container-fluid">
        <h1>All Comments</h1>

        <table class="table">
            <thead>

            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Komentar</th>
                <th scope="col">View Post</th>
                <th scope="col">Aprove Comments</th>
                <th scope="col">Delete Post</th>
            </tr>
            </thead>
            <tbody>

            @foreach($comments as $comment)
                <tr>
                    <th scope="row">{{$comment->id}}</th>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td> <a href="{{route('home.post', $comment->post->id)}}">View Post</a> </td>
                    <td>

                        @if($comment->is_active == 1)


                            {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentController@update', $comment->id]]) !!}


                            <input type="hidden" name="is_active" value="0">


                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}


                        @else



                            {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentController@update', $comment->id]]) !!}


                            <input type="hidden" name="is_active" value="1">


                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                            </div>
                    {!! Form::close() !!}




                    @endif

                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['PostCommentController@destroy', $comment->id]]) !!}

                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>

                            {!! Form::close() !!}

                        </td>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        <div class="d-flex justify-content-center">
            {!! $comments->render() !!}
        </div>
    </div>
    @else

    <h1 class="text-center">No comments</h1>

    @endif

    @stop