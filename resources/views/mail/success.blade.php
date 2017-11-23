@extends('layouts.app')
@section('styles')
    <link href="../css/jquery.datetimepicker.css" rel="stylesheet">

@endsection
@section('content')
    <div class="container">


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Uspešno poslano</strong>
                    </h2>
                    <hr>
                    <p>Spoštovani uporabnik, vaše sporočilo je bilo uspešno poslano. V najkrajšem možnem času vas bomo kontaktirali
                        in se dogovorili za termin.
                        <br>
                        <br>
                        Želimo vam lep in uspešen dan še naprej.
                        <br>
                        <br>
                        Kolektiv frizerskega salona Pretty

                    </p>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="js/script.js"></script>
    <script src="js/jquery.datetimepicker.min.js"></script>
@endsection