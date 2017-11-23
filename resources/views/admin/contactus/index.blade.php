@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">



            <h1>Sporočila</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>Ime</th>
                    <th>Email</th>
                    <th>Telefonska številka</th>
                    <th>Željen termin</th>
                    <th>Sporočilo</th>
                    <th>Prejeto</th>
                    <th></th>

                </tr>
                </thead>
                <tbody>

                @if($contacts)

                    @foreach($contacts as $contact)

                        <tr>
                            <td>{{$contact->ime}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->termin}}</td>
                            <td>{{$contact->sporocilo}}</td>
                            <td>{{$contact->created_at->format('d:m:Y h:m')}}</td>
                            <td>

                                @if($contact->status == 1)

                                    <div class="btn btn-success"> Novo

                                    </div>

                                @endif

                            </td>
                            <td>

                                @if($contact->status == 1)

                                    {!! Form::open(['method'=>'PATCH', 'action'=>['ContactUSController@update', $contact->id]])!!}

                                    <input type="hidden" name="status" value="0">

                                    <div class="form-group">
                                        {!! Form::submit('Označi kot prebrano', ['class'=>'btn btn-success'] ) !!}
                                    </div>

                                    {!! Form::close()!!}


                                @endif

                            </td>

                            <td>
                                {{--DELETE FORM--}}

                                {!! Form::open(['method'=>'DELETE', 'action'=>['ContactUSController@destroy', $contact->id]])!!}


                                <div class="form-group">
                                    {!! Form::submit('Zbriši', ['class'=>'btn btn-danger'] ) !!}
                                </div>

                                {!! Form::close()!!}
                            </td>

                        </tr>

                    @endforeach

                @endif

                </tbody>
            </table>

        </div>
    </div>


@endsection

@section('scripts')
    <script>
        $(".delete").on("submit", function(){
            return confirm("Do you want to delete this item?");
        });
    </script>
    @endsection