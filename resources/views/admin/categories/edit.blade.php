@extends('layouts.admin')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            <h1>Preimenuj kategorijo</h1>

    <div class="col-sm-6">

        {!! Form::model($category,['method'=>'Patch', 'action'=>['AdminCategoriesController@update', $category->id]])!!}

        <div class="form-group">

            {!! Form::label('name', 'Ime:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Preimenuj', ['class'=>'btn btn-primary col-sm-4 btn-sm'] ) !!}
        </div>

        {!! Form::close()!!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]])!!}

        <div class="form-group">
            {!! Form::submit('Izbriši', ['class'=>'btn btn-danger col-sm-4 btn-sm' ] ) !!}
        </div>

        {!! Form::close()!!}

        <a class="btn btn-warning col-sm-4 btn-sm" href="{{ route('admin.media.index') }}">Prekliči</a>



    </div>

        </div>    </div>



@endsection