@extends('layouts.app')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ URL::asset('css/news.css') }}" rel="stylesheet" type="text/css" >

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 col-md-offset-1">
                @if(count($posts)> 0)

                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        <h6>@include('includes.form_error')</h6>

                        @foreach($posts as $post)
                            <div class="cardbox shadow-lg bg-white">

                                <div class="cardbox-heading">
                                    <!-- START dropdown-->
                                    <div class="dropdown float-right">

                                        <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item" href="#">Hide post</a>
                                            <a class="dropdown-item" href="#">Stop following</a>
                                            <a class="dropdown-item" href="#">Report</a>
                                        </div>
                                    </div><!--/ dropdown -->
                                    <div class="media m-0">
                                        <div class="d-flex mr-3">
                                            <a href="{{route('user.profile', $post->user->id)}}"><img class="img-fluid rounded-circle" src="{{$post->user->photo ? url('img/'.$post->user->photo->path) : 'http://placehold.it/50x50'}}" alt="User"></a>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">{{$post->user->name}}</p>
                                            <small><span><i class="icon ion-md-pin"></i>{{$post->title}}</span></small>
                                            <small><span><i class="icon ion-md-time"></i>{{$post->created_at->diffForHumans()}}</span></small>
                                        </div>
                                    </div><!--/ media -->
                                </div><!--/ cardbox-heading -->
                                <div class="cardbox-base">
                                    <p>{{$post->body}}</p>

                                </div><!--/ cardbox-base -->
                                <div class="cardbox-item  shadow-sm bg-white">

                                    <img class="img-fluid" src="{{ $post->photo ? url('img/'.$post->photo->path) : 'http://placehold.it/800x800' }}" alt="Image">
                                    {{--<img class="img-fluid" src="{{Auth::user()->photo ? url('img/'.Auth::user()->photo->path) : 'No picture'}}" alt="Image">--}}
                                </div><!--/ cardbox-item -->
                                <div class="cardbox-body">


                                </div><!--/ cardbox-base -->

                                <div class="cardbox-comments border-bottom">
                                    @if(Auth::check())

                                    <h6 class="text-left">Leave comment :</h6>

                                            @else
                                        @if(count($post->comments) > 0)
                                        <h6 class="text-left">Comments :</h6>


                                    @endif
                                    @endif
                                    <span class="comment-avatar float-left">


			                        </span>

                                    @if(Auth::check())
                                        <div class="">

                                            {!! Form::open(['method'=>'POST', 'action'=>'PostCommentController@store']) !!}

                                            <input type="hidden" name="post_id" value="{{$post->id}}">

                                            <div class="form-group">
                                                {!! Form::label('body', 'body:') !!}
                                                {!! Form::textarea('body', null, ['class'=>'form-control shadow-sm bg-light', 'rows' => 3]) !!}
                                            </div>

                                            <div class="form-group">

                                                {!! Form::submit('Submit comment', ['class'=>'btn btn-primary']) !!}
                                            </div>

                                            {!! Form::close() !!}



                                        </div><!--/. Search -->
                                    @endif
                                </div><!--/ cardbox-like -->

                                @if(count($post->comments) > 0)

                                    @foreach($post->comments as $comment)

                                        @if($comment->is_active)


                                            <div class="media commsize shadow-sm mb-1 p-3 bg-white">
                                                <a class="pull-left" href="#">
                                                    <img class="img-fluid rounded-circle" src="{{$comment->photo ? url('img/'.$comment->photo) : 'http://placehold.it/50x50'}}" >
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading">{{$comment->author}}
                                                        <small>{{$comment->created_at->diffForHumans()}}</small>
                                                    </h5>
                                                    <p class="shadow-sm bg-light">{{$comment->body}}</p>

                                                </div>

                                            </div>

                                        @endif

                                    @endforeach

                                @endif

                            </div><!--/ cardbox -->

                            @endforeach

                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $posts->render(); !!}
                    </div>
                </div>


            </div>
            @else()
                <h1 class="text-center">No Posts</h1>
            @endif
        </div>
    </div>

@endsection
