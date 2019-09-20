@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Create User</h1>

            {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files' => true]) !!}

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
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1=> 'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
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
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
            </div>

               {!! Form::close() !!}


        @include('includes.form_error')


    </div>

    @stop