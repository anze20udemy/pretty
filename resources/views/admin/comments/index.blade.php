@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <h1>Pohvale in kritike</h1>


    @if(count($comments) > 0)

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Slika</th>
                <th>Avtor</th>
                <th>Komentar</th>
            </tr>
            </thead>

            @foreach($comments as $comment)
                <tbody>
                <tr>
                    <td>{{$comment->id}}</td>
                    <td><img height="62" src="{{$comment->user->avatar}}" alt=""></td>
                    <td>{{$comment->user->name}}</td>



                    <td>{{$comment->body}}</td>


                    <td>

                        @if($comment->is_active == 1)

                            {!! Form::open(['method'=>'PATCH', 'action'=>['AdminCommentsController@update', $comment->id]])!!}

                            <input type="hidden" name="is_active" value="0">

                            <div class="form-group">
                                {!! Form::submit('Prekliči objavo', ['class'=>'btn btn-success'] ) !!}
                            </div>

                            {!! Form::close()!!}
                        @else
                            {!! Form::open(['method'=>'PATCH', 'action'=>['AdminCommentsController@update', $comment->id]])!!}

                            <input type="hidden" name="is_active" value="1">

                            <div class="form-group">
                                {!! Form::submit('Dovoli objavo', ['class'=>'btn btn-info'] ) !!}
                            </div>

                            {!! Form::close()!!}

                        @endif

                    </td>
                    <td>
                        {{--DELETE FORM--}}

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCommentsController@destroy', $comment->id]])!!}


                        <div class="form-group">
                            {!! Form::submit('Zbriši komentar', ['class'=>'btn btn-danger'] ) !!}
                        </div>

                        {!! Form::close()!!}
                    </td>

                </tr>

                @endforeach

                </tbody>
        </table>

    @else

        <h1 class="text-center">Trenutno ni nobene kritike ali pohvale</h1>

    @endif

        </div>
    </div>

@endsection