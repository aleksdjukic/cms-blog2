@extends('layouts.admin')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-3">
                <img src="{{$post->photo ? url('img/'.$post->photo->path) : 'http://placehold.it/200x200'}}" class="img-fluid">
            </div>
            <div class="col-sm-9">
    <div class="container">
        <div class="col-sm-12">
    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files' => true]) !!}

      <div class="form-group">
       {!! Form::label('title', 'Title:') !!}
       {!! Form::text('title', null, ['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
      </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

      <div class="form-group">
         {!! Form::submit('Edit Post', ['class'=>'btn btn-primary col-sm-6']) !!}
      </div>

       {!! Form::close() !!}


       {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}

       <div class="form-group">
         {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}
       </div>

       {!! Form::close() !!}

    </div>
    </div>
                @include('includes.form_error')
            </div>
        </div>
    </div>
    @endsection