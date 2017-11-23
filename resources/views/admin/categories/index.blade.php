@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">
        <h1>Kategorije slik</h1>
        <div class="container-fluid">


            <div class="col-sm-8">

            @if(count($categories) > 0)

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Ime</th>
                        <th></th>


                    </tr>
                    </thead>

                    @foreach($categories as $category)
                        <tbody>
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('admin.categories.edit',$category->id )}}" class="btn btn-success btn-sm">Uredi</a>


                        </td>

                        @endforeach

                        </tbody>
                </table>

            @else

                <h1 class="text-center">V bazi nimate kategorij</h1>

            @endif

        </div>



            <div class="col-sm-4">

                {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store'])!!}

                <div class="form-group">

                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">
                    {!! Form::submit('Ustvari Kategorijo', ['class'=>'btn btn-primary'] ) !!}
                </div>

                {!! Form::close()!!}

            </div>




    </div>
    </div>

@endsection