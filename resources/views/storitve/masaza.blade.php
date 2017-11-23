@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Masaža las</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive img-circle" src="/images/masaza.jpg">

                </div>

                <div class="col-lg-7">
                    <p style="text-align: justify">
                        Masaža je zdrava za vse tipe las, razen za mastne, ker poveča delovanje žlez lojnic.<br> Ni pa primerna za hudo bolne ljudi.  <br>
                        Lasišča si ne smejo masirati tudi tisti, ki imajo gnojne ali glivične okužbe ali ekcem (srbeče, nenalezljivo kožno vnetje).</p>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>


        @include('storitve.include.slike')
    </div>

    @endsection