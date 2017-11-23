@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Kodranje las</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive img-circle" src="/images/kodranje.jpg">

                </div>

                <div class="col-lg-7">
                    <p style="text-align: justify">
                        Če vaši lasje niso naravno skodrani, vam jih lahko preprosto uredimo s kodralnikom.
                        <br>
                        Za velik volumen in velike kodre uprobljamo debelejši kodralnik.
                        <br>
                        Ženskam z naravno skodranimi lasmi nudimo tudi ravnanje las. <br>
                        </p>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        @include('storitve.include.slike')
    </div>
@endsection