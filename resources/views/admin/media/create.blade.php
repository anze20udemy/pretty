@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">

@endsection

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <h1>Naloži slike</h1>

            {!! Form::open(['method'=>'POST', 'action'=>'AdminMediasController@store', 'class'=>'dropzone', 'id'=>'mydz' ])!!}


            {!! Form::close()!!}

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>

    {{--Za prevod teksta v oknu--}}
    <script type="text/javascript">

        Dropzone.options.mydz = {
            dictDefaultMessage: "Za dodajanje slik kliknite tukaj."
        };

    </script>

@endsection