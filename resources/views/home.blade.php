@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="images/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="images/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="images/slide-3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="images/slide-4.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <!--
                        <h2 class="brand-before">
                        <   small>Dobrodošli v </small>
                        </h2>
                        <h1 class="brand-name">Frizerskem salonu Pretty</h1>
                    -->

                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Frizerski salon Pretty -
                        <strong>salon za vse generacije.</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left " width="450" src="images/20170109_151923.jpg" alt="">
                    <hr class="visible-xs">
                    <p>

                        Salon v centru Nakla deluje že od leta 2006. Sprva na stari lokaciji poleg trgovine, od januarja 2014 pa se nahajamo na novi lokaciji, v prvem nadstropju stavbe Pošte Slovenije.
                        <br><br>
                        Strankam nudimo vse vrste profesionalnega modnega striženja za moške, ženske in otroke. Prilagajamo se vašim željam, ter vam s pomočjo našega strokovnega znanja tudi svetujemo.
                        <br><br>
                        Veselimo se vašega obiska!</p>
                </div>

                <div class="eupopup eupopup-bottom"></div>
            </div>


        </div>
    </div>

    </div>
@endsection

@section('scripts')
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery-eu-cookie-law-popup.css"/>
    <script src="js/jquery-eu-cookie-law-popup.js"></script>
@endsection
