@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">



            <div class="col-sm-6">
                <h1>Slike</h1>
    @if($photos)



        <table class="table">

            <thead>
            <tr>

                <th class="text-center">ID slike</th>
                <th class="text-center">Slika</th>
                <th class="text-center">Kategorija</th>

            </tr>
            </thead>
            <tbody>

            @foreach($photos as $photo)


                <tr>

                    <td class="text-center">{{$photo->id}}</td>
                    <td>
                        <a href="{{route('admin.media.edit',$photo->id )}}"><img class="img-responsive img-rounded" width="200"  src="{{$photo->file}}" alt=""></a>

                    </td>
                    <td class="text-center">{{$photo->category->name}}</td>



                </tr>

            @endforeach

            </tbody>
        </table>

        </form>

    @endif
        </div>

            <div class="col-sm-6">
                <h1>Kategorije slik</h1>

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

        </div>
    </div>
@endsection

@section('scripts')

    <script>

        $(document).ready(function () {

            $('#options').click(function () {

                if (this.checked){

                    $('.checkBoxes').each(function(){

                        this.checked = true;

                    });

                } else {

                    $('.checkBoxes').each(function(){

                        this.checked = false;

                    });


                }



            });

        });

    </script>

@endsection