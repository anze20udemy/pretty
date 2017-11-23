@extends('layouts.app')

@section('styles')
    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
    @endsection



@section('content')

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="box">

                    <h1 class="text-center">kritike in pohvale</h1>
                    <p>Na tej strani lahko oddate svoje mnenje o naših storitvah. Vaše mnenje nam veliko pomeni,
                        saj z vašimi predlogi lahko postanemo še boljši. Sprejemamo tako pohvale, kot tudi kritike. Prosimo
                        vas, da pri komentiranju upoštevate bonton, saj bodo pretirano žaljivi ali nesramni komentarji odstranjeni.</p>
                    <p>Kolektiv frizerskega salona Pretty</p>

                </div></div></div>

                    <div class="row">
            <div class="col-lg-12">
            <div class="box">



                <div class="col-lg-7">

@foreach($comments as $comment)

    <!-- Single Comment -->
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" width="80" src="{{$comment->user->avatar}}" alt="">
            <div class="media-body">
                <h5 class="mt-0">{!!$comment->user->name!!}</h5>
                {!!$comment->body!!}
            </div>
        </div>

                    <hr>
    @endforeach
    </div>
                @if($user = Auth::user())
                <div class="col-lg-4">

                    <h2 class="text-center">Oddajte svoje mnenje</h2>


                    <div class="row">

                        @include('includes.form_error')

                    </div>

                    {!! Form::open(['method'=>'POST', 'action'=>'CommentController@store', 'files'=>true])!!}





                    <div class="form-group">
                        {!! Form::label('body', 'Sporočilo:') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LeIjUEUAAAAAMGac7t2izqg7Uhc1QnzyPbNZWVM"></div>

                    <div class="form-group">
                        {!! Form::submit('Objavi', ['class'=>'btn btn-primary'] ) !!}
                    </div>

                    {!! Form::close()!!}
                </div>

                    @else

                    <div class="col-lg-5">

                        <h2 class="text-center">Za oddajo komentarja je potrebna prijava</h2>


                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a href="{{ url('/auth/google') }}" class="btn btn-google btn-md"><i class="fa fa-google fa-4x"></i> Gmail</a>



                                    <a href="{{ url('/auth/twitter') }}" class="btn btn-twitter btn-md"><i class="fa fa-twitter fa-4x"></i> Twitter</a>

                                    <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook btn-md"><i class="fa fa-facebook fa-4x"></i> Facebook</a>
                                </div>
                            </div>



                        </form>
                    </div>

                    @endif

                </div>


            </div>

        </div>


    </div>
</div>
    <!-- /.container -->

@endsection

