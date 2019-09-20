@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
        <div class="col-sm-3">
            <img src="{{ $user->photo ? url( 'img/'.$user->photo->path) : 'http://placehold.it/200x200'}}" class="img-fluid">
        </div>
        <div class="col-sm-9">
        <h1>Edit User</h1>

           {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files' => true]) !!}

             <div class="form-group">
               {!! Form::label('name', 'Name:') !!}
               {!! Form::text('name', null, ['class'=>'form-control']) !!}
              </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles , null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:',['class' => 'w-100']) !!}
                {!! Form::password('password', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Password confirmation:',['class'=> 'w-100']) !!}
                {!! Form::password('password_confirmation', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit user', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

           {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete user', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

        {!! Form::close() !!}

            @include('includes.form_error')
        </div>
        </div>
    </div>



@stop