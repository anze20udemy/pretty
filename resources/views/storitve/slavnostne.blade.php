@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Slavnostne pričeske</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive img-circle" src="/images/slavnostne.jpg">

                </div>

                <div class="col-lg-7">
                    <p style="text-align: justify">
                        Med svečane pričeske se uvrščajo tiste frizure, ki jih imate ob različnih posebnih priložnostih kot so poroke, mature, slavnostni večeri, novo leto…
                        <br>
                        Vsaka pričeska, ne glede na to ali je kratka ali dolga, kodrasta ali ravna, lahko postane svečana. Izbor je ogromen, a ne samo za dolge temveč tudi za kratke lase.
                        <br>
                        Najbolj priljubljene kratke svečane frizure so tiste, pri katerih so lasje počesani nazaj ali nekoliko bolj elegantne paž pričeske.
                        <br>
                        Če so vaši lasje dolgi, lahko izbirate ali med krasnimi figami in elegantnimi kodri ali med bolj klasičnimi dvignjenimi pričeskami in prelepimi kitami, valovitimi pričeskami ter konjskimi repi</p>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        @include('storitve.include.slike')
    </div>
@endsection