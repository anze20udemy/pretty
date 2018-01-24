@extends('layouts.app')

@section('styles')

    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">

    <style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    fieldset, label { margin: 0; padding: 0; }
    body{ margin: 20px; }
    h1 { font-size: 1.5em; margin: 10px; }

    /****** Style Star Rating Widget *****/

    .rating {
    border: none;
    float: left;
    }

    .rating > input { display: none; }
    .rating > label:before {
    margin: 5px;
    font-size: 1.25em;
    font-family: FontAwesome;
    display: inline-block;
    content: "\f005";
    }

    .rating > .half:before {
    content: "\f089";
    position: absolute;
    }

    .rating > label {
    color: #ddd;
    float: right;
    }



    /***** CSS Magic to Highlight zvezdic on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
    </style>
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

                    <div class="row">

                    <h1 style="text-align: center">Ocena uporabnikov:
                        @if ($avgRating >=4.5)

                            <span class="text-warning" style="font-size: xx-large">&#9733; &#9733; &#9733; &#9733; &#9733;</span>

                        @elseif ($avgRating >=3.5)

                            <span class="text-warning" style="font-size: xx-large">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                        @elseif ($avgRating >= 2.5)

                            <span class="text-warning" style="font-size: xx-large">&#9733; &#9733; &#9733; &#9734; &#9734;</span>

                        @elseif ($avgRating >= 1.5)

                            <span class="text-warning" style="font-size: xx-large">&#9733; &#9733; &#9734; &#9734; &#9734;</span>

                        @else
                            <span class="text-warning" style="font-size: xx-large">&#9734; &#9734; &#9734; &#9734; &#9734;</span>

                        @endif

                    </h1>



                            <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9733; &#9733; &#9733;</span>  {{$star5}} ocen
                            <br>
                            <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9733; &#9733; &#9734;</span> {{$star4}} ocen
                            <br>
                            <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9733; &#9734; &#9734;</span> {{$star3}} ocen
                            <br>
                            <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9734; &#9734; &#9734;</span> {{$star2}} ocen
                            <br>
                            <span class="text-warning" style="font-size: large">&#9733; &#9734; &#9734; &#9734; &#9734;</span> {{$star1}} ocen



                        <br>
                        <h5>Skupno število ocen: {{$numRating}}</h5>

                    </div>
                    <hr>

    @if($comments)
    @foreach($comments as $comment)

        <!-- Single Comment -->
        <div class="col-lg-12">

            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" width="80" src="{{$comment->user->avatar}}" alt="">
                <div class="media-body">
                    <h5 class="mt-0">{!!$comment->user->name!!}</h5>

                    <div>
                    @if ($comment->rating >=4.5)

                        <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9733; &#9733; &#9733;</span>

                    @elseif ($comment->rating >=3.5)

                        <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                    @elseif ($comment->rating >= 2.5)

                        <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9733; &#9734; &#9734;</span>

                    @elseif ($comment->rating >= 1.5)

                        <span class="text-warning" style="font-size: large">&#9733; &#9733; &#9734; &#9734; &#9734;</span>

                    @else
                        <span class="text-warning" style="font-size: large">&#9734; &#9734; &#9734; &#9734; &#9734;</span>

                    @endif
                    </div>
                    {!!$comment->body!!}
                </div>
            </div><hr>
            </div>


        @endforeach
        @endif


    </div>
                @if($user = Auth::user())

                <div class="col-lg-4">

                    <h2 class="text-center">Ocenite nas:</h2>


                    <div class="row">

                        @include('includes.form_error')

                    </div>

                    {!! Form::open(['method'=>'POST', 'action'=>'CommentController@store', 'files'=>true])!!}

                    <div class="form-group text-center">


                        <input type="hidden" name="comment_id" value="{{$comment->id}}">


                        <fieldset class="rating">
                            <input type="radio" id="star5" name="ocena" value="5" /><label class = "full" for="star5" title="Super - 5 zvezdic"></label>

                            <input type="radio" id="star4" name="ocena" value="4" /><label class = "full" for="star4" title="Zelo v redu - 4 zvezdice"></label>

                            <input type="radio" id="star3" name="ocena" value="3" /><label class = "full" for="star3" title="No ja - 3 zvezdice"></label>

                            <input type="radio" id="star2" name="ocena" value="2" /><label class = "full" for="star2" title="Pričakoval/a sem več - 2 zvezdici"></label>

                            <input type="radio" id="star1" name="ocena" value="1" /><label class = "full" for="star1" title="Razočaran/a sem - 1 zvezdica"></label>



                        </fieldset>

                    </div>



                    <div class="form-group">
                        {!! Form::label('body', 'Pohvala ali kritika (po želji):') !!}
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

