@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

    <h1>Ustvari uporabnika</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('name', 'Ime:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Tip uporabnika:') !!}
        {!! Form::select('role_id', ['Izberi možnost'] + $roles,null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Slika:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Geslo:') !!}
        {!! Form::password('password', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Ustvari uporabnika', ['class'=>'btn btn-primary'] ) !!}
    </div>

    {!! Form::close()!!}

    @include('includes.form_error')
        </div>
    </div>

@endsection