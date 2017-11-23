@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Barvanje las</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive img-circle" src="/images/barvanje.jpg">

                </div>

                <div class="col-lg-7">
                    <p style="text-align: justify">
                        Ali si želite črno barvo las ali bi imeli raje naravno rdečo. <br>
                    Morda čisto blond, ali samo nekaj pramenov. Mogoče kakšno "odpiljeno" roza?<br>
                    Lahko vas pobarvamo z pol-obstojnimi barvami za lase, katere so primerne za ustvarjanje odtenkov. Izperejo se po približno 10-15 pranjih.<br>
                    Trajno barvanje las se v primerjavi z barvnim prelivom ne izpere že po nekaj umivanjih.</p>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>

@include('storitve.include.slike')

    </div>
@endsection