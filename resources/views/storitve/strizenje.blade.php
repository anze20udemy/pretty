@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>striženje las</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive img-circle" src="/images/strizenje.jpg">

                </div>

                <div class="col-lg-7">
                    <p style="text-align: justify">
                        V našem salonu izvajamo modno striženje las za moške, ženske in otroke.
                        <br>
                        Žensko striženje je običajno najbolj zahtevno, saj se soočamo z zelo raznolikimi željami naših strank, a za nas ni noben izziv neuresničljiv.
                        <br>

                        Žensko striženje po želji nadgradi še barvanje las, pri čemer uporabljamo izdelke priznanih proizvajalcev.</p>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        @include('storitve.include.slike')
    </div>
@endsection