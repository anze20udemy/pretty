@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

    <h1>Uredi uporabnika</h1>

    <div class="row">
        <div class="col-sm-3">

            <img src="{{$user->avatar ? $user->avatar : 'https://placeimg.com/400/400/people' }}" alt="" class="img-responsive img-rounded">
        </div>

        <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true])!!}

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
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>


            {{--<div class="form-group">--}}
                {{--{!! Form::label('photo_id', 'Slika:') !!}--}}
                {{--{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
            {{--</div>--}}

            <div class="form-group">
                {!! Form::label('password', 'Geslo:') !!}
                {!! Form::password('password', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Uredi uporabnika', ['class'=>'btn btn-primary col-sm-6'] ) !!}
            </div>

            {!! Form::close()!!}

            {{--DELETE--}}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]])!!}


            <div class="form-group">
                {!! Form::submit('Zbriši uporabnika', ['class'=>'btn btn-danger col-sm-6'] ) !!}
            </div>

            {!! Form::close()!!}

        </div>
    </div>

    <div class="row">

        @include('includes.form_error')

    </div>
        </div>
    </div>

@endsection