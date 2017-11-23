@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <h1>Uredi sliko</h1>

            <div class="row">
                <div class="col-sm-6">

                    <img src="{{$photo->file}}" alt="" class="img-responsive img-rounded">
                </div>

                <div class="col-sm-6">

                    {!! Form::model($photo,['method'=>'PATCH', 'action'=>['AdminMediasController@update', $photo->id], 'files'=>true])!!}



                    <div class="form-group">
                        {!! Form::label('category_id', 'Kategorija:') !!}
                        {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::submit('Posodobi', ['class'=>'btn btn-primary col-sm-6'] ) !!}
                    </div>

                    {!! Form::close()!!}

                    {{--DELETE--}}

                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]])!!}


                    <div class="form-group">
                        {!! Form::submit('Zbriši', ['class'=>'btn btn-danger col-sm-6'] ) !!}
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