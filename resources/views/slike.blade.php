@extends('layouts.app')
@section('styles')

    <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

    @endsection

{{--@section('content')--}}



            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="box">--}}
                        {{--@foreach($photos as $photo)--}}
                    {{--<div  class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{$photo->file}}" /></div>--}}
                            {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}


{{--@endsection--}}

@section('content')
    <div class="container">
    <div class="row">
    <div class="box">

    <ul class="first">

        @foreach($category->photo as $photo)

                        <a rel="example_group" href="{{$photo->file}}"><img class="img img-thumbnail" src="photos/thumbs/{{$photo->thumb}}" alt="test"/></a>


                    @endforeach
    </ul>
    </div></div></div>
@endsection

@section('scripts')
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *   Examples - images
             */



            $("a[rel=example_group]").fancybox({
                'transitionIn'		: 'none',
                'transitionOut'		: 'none',
                'titlePosition' 	: 'over',
                'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
            });

            /*
             *   Examples - various
             */


        });
    </script>

@endsection



