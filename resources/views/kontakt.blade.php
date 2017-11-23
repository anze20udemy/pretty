
@extends('layouts.app')
@section('styles')
    <link href="../datetimepicker/build/jquery.datetimepicker.min.css" rel="stylesheet">
    <link href="../datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <style>
        aside.sidebar .single {
            padding: 30px 15px;
            margin-top: 10px;
            background: transparent;
            border: 1px solid #f0f0f0; }
        aside.sidebar .single h3.side-title {
            margin: 0;
            margin-bottom: 10px;
            padding: 0;
            font-size: 20px;
            color: #333;
            text-align: center;
            text-transform: uppercase; }
        aside.sidebar .single h3.side-title:after {
            content: '';
            width: 60px;
            height: 1px;
            background: #00b0ff;
            display: block;
            margin-top: 6px; }
        .single.contact-info {
            background: none;
            border: none; }
        .single.contact-info li {
            margin-top: 30px; }
        .single.contact-info li .icon {
            display: block;
            float: left;
            padding-top: 20px;
            margin-right: 10px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid #f0f0f0;
            color: #00b0ff;
            text-align: center;
            line-height: 50px; }
        .single.contact-info li .info {
            overflow: hidden; }
    </style>

@endsection
@section('content')
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-md-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>kje nas lahko najdete</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="col-md-8">
                        <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.8557372796145!2d14.313510015859052!3d46.27297117911882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ab901e4ab7eb9%3A0xa3765354f7bf3c8d!2sFrizerski+salon+Pretty+Klara+Jenko+s.p.!5e0!3m2!1ssl!2ssi!4v1484991706110" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">

                        <aside class="sidebar">
                            <div class="single contact-info">
                                <h3 class="side-title">Kontaktni podatki</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                                        <div class="info"><p>Glavna cesta 24 <br>
                                                4202 Naklo </p></div>
                                    </li>

                                    <li>
                                        <div class="icon"><i class="fa fa-phone"></i></div>
                                        <div class="info"><p>040 646 222 Klara</p></div>
                                    </li>

                                    <li>
                                        <div class="icon"><i class="fa fa-envelope"></i></div>
                                        <div class="info"><p>info@salon-pretty.si</p></div>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">

        <div class="row">

        <div class="box">
            <div class="col-md-8">


                <hr>
                <h2 class="intro-text text-center">
                    <strong>naročite se</strong>
                </h2>
                <hr>
            <div class="row">

                @include('includes.form_error')

            </div>

                {!! Form::open(['route'=>'contactus.store']) !!}

                <div class="form-group {{ $errors->has('ime') ? 'has-error' : '' }}" style="text-transform: uppercase">
                    {!! Form::label('Ime in priimek:') !!}
                    {!! Form::text('ime', old('ime'), ['class'=>'form-control', 'placeholder'=>'Vpiši ime']) !!}
                    {{--<span class="text-danger">{{ $errors->first('ime') }}</span>--}}
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" style="text-transform: uppercase">
                    {!! Form::label('Elektronski naslov:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Vpiši elektronski naslov']) !!}
                    {{--<span class="text-danger">{{ $errors->first('email') }}</span>--}}
                </div>

                <div class="form-group  {{ $errors->has('phone') ? 'has-error' : '' }}" style="text-transform: uppercase">
                    {!! Form::label('Telefonska številka (neobvezno):') !!}
                    {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Vpiši telefonsko številko']) !!}
                    {{--<span class="text-danger">{{ $errors->first('phone') }}</span>--}}
                </div>

            <div class="form-group {{ $errors->has('termin') ? 'has-error' : '' }}" style="text-transform: uppercase">
               <div><label for="termin">Željeni termin:</label></div>


                    <input name="termin" id="datetimepicker7" type="datetime" class="form-control">
                    {{--<span class="text-danger">{{ $errors->first('termin') }}</span>--}}


                </div>


                <div class="form-group {{ $errors->has('sporocilo') ? 'has-error' : '' }}" style="text-transform: uppercase">
                    {!! Form::label('Sporočilo:') !!}
                    {!! Form::textarea('sporocilo', old('sporocilo'), ['class'=>'form-control', 'placeholder'=>'Vpiši sporočilo']) !!}
                    {{--<span class="text-danger">{{ $errors->first('sporocilo') }}</span>--}}
                </div>

            <div class="g-recaptcha" data-sitekey="6LeIjUEUAAAAAMGac7t2izqg7Uhc1QnzyPbNZWVM"></div>
                <div class="form-group">
                    <button class="btn btn-success">Pošlji</button>
                </div>

                {!! Form::close() !!}

            </div>
            <div class="col-md-4">

                <div class="business-hours">
                    <h1 class="title">Odpiralni čas</h1>
                    <ul class="list-unstyled opening-hours " style="font-size: large">
                        <li>NEDELJA <span class="pull-right">Zaprto</span></li>
                        <li>PONEDELJEK <span class="pull-right">11:00-19:00</span></li>
                        <li>TOREK <span class="pull-right">08:00-13:00</span></li>
                        <li>SREDA <span class="pull-right">11:00-19:00</span></li>
                        <li>ČETRTEK <span class="pull-right">08:00-15:00</span></li>
                        <li>PETEK <span class="pull-right">11:00-19:00</span></li>
                        <li>SOBOTA <span class="pull-right">08:00-12:00</span></li>
                    </ul>
                </div>
            </div>

            </div>
        </div>


        </div>



    </div>




    </div>
@endsection

@section('scripts')
    <script src="../datetimepicker/build/jquery.datetimepicker.full.js"></script>
    <script src="../datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
    <script src="../js/script.js/"></script>


    <script type="text/javascript">
        $(function () {
            $.datetimepicker.setLocale('sl');


            $('#datetimepicker7').datetimepicker({


                dayOfWeekStart : 1,
                minDate:0,
                disabledWeekDays:[0],
//                format:'d.m.Y H:i',
                defaultTime:'08:00'

//                format: 'YYYY-MM-DD HH:mm'




            });

        });

    </script>



@endsection