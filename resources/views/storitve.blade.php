@extends('layouts.app')
@section('content')
<div class="container">


    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">kaj vam
                    <strong>nudimo</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <a href="{{ url('../storitve/barvanje') }}"> <img class="img-responsive img-circle" src="/images/barvanje.jpg" alt="" title="Barvanje las"></a>

                <h3>barvanje <small>las</small></h3>
            </div>

            <div class="col-sm-4 text-center">
                <a href="{{ url('../storitve/masaza') }}"> <img class="img-responsive img-circle" src="/images/masaza.jpg" alt="" title="Masaža las"></a>


                <h3>masaža <small>las</small></h3>
            </div>
            <div class="col-sm-4 text-center">
                <a href="{{ url('../storitve/strizenje') }}"> <img class="img-responsive img-circle" src="/images/strizenje.jpg" alt="" title="Striženje las"></a>

                <h3>striženje <small>las</small></h3>
            </div>

            <div class="col-sm-4 text-center">
                <a href="{{ url('../storitve/slavnostne') }}"> <img class="img-responsive img-circle" src="/images/slavnostne.jpg" alt="" title="Slavnostne pričeske"></a>


                <h3>slavnostne <small>pričeske</small></h3>
            </div>
            <div class="col-sm-4 text-center">
                <a href="{{ url('../storitve/kodranje') }}"> <img class="img-responsive img-circle" src="/images/kodranje.jpg" alt="" title="Kodranje las"></a>

                <h3>trajno kodranje <small>las</small></h3>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>

</div>
    @endsection